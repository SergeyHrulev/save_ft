<template>
    <div class="cms-content__item">
        <div class="col-12">
            <div class="form-group">
                <label for="">Мета заголовок</label>
                <input type="text" class="form-control" v-model="meta_title">
                <small class="form-text"></small>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Мета описание</label>
                <input type="text" class="form-control" v-model="meta_description">
                <small class="form-text"></small>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Заголовок статьи</label>
                <input type="text" class="form-control" v-model="title">
                <small class="form-text"></small>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Подзаголовок</label>
                <input type="text" class="form-control" v-model="subtitle">
                <small class="form-text"></small>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <article class="article" v-bind="edited_text">
                        {{ edited_text }}
                    </article>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Текст статьи</label>
                <div>
                    <button class="btn btn-clear btn-lg" @click.prevent="setParagraph">Параграф</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Вставить фото
                    </button>
                </div>
                <textarea class="form-control" name="text" v-model="text" id="" cols="30" rows="10"></textarea>
                <small class="form-text"></small>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" v-model="published">
                <label for="">Опубликована</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button type="button" class="btn btn-primary" @click="saveArticle">Сохранить</button>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Выбор фото</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Выберите фото</label>
                            <input type="file" @change="onSelectedFile" ref="file" name="file" class="btn btn-info btn-sm">
                        </div>
                        <div class="form-group">
                            <label for="">Альт фото</label>
                            <input type="text" name="alt" v-model="articlePhoto.alt">
                        </div>
                        <div class="form-group">
                            <label for="">Заголовок фото</label>
                            <input type="text" name="title" v-model="articlePhoto.title">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary btn-sm" @click="setImage">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "CreateArticleComponent",
        data(){
            return{
                meta_title: '',
                meta_description: '',
                title: '',
                subtitle: '',
                text: '',
                published: 0,
                edited_text: '',
                file: '',
                articlePhoto: {
                    photo: '',
                    alt: '',
                    title: '',

                }
            }
        },
        methods:{
            saveArticle(){
                axios.post('/admin-dashboard/articles', {
                    meta_title: this.meta_title,
                    meta_description: this.meta_description,
                    title: this.title,
                    subtitle: this.subtitle,
                    text: this.edited_text,
                    published: this.published,
                }).then(response => {
                    console.log(response.data);
                })
            },
            setParagraph(){
                let edit = this.text;
                this.edited_text += '<p>' + edit + '</p>';
                this.text = '';
            },
            setImage(){
                axios.post('/admin-dashboard/articles/savemodel', {
                    photo: this.articlePhoto.photo,
                    alt: this.articlePhoto.alt,
                    title: this.articlePhoto.title,
                }).then(response => {
                    console.log(response.data);
                    this.edited_text += '<img src="' + response.data.photo + '" alt="' + response.data.alt + '">';
                })
            },
            setBlockqoute(){

            },
            onSelectedFile(){
                let formData = new FormData();
                this.file = this.$refs.file.files[0];
                formData.append('photo', this.file);
                console.log(formData);
                axios.post('/admin-dashboard/articles/savephoto', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(response => {
                    console.log(response.data);
                    this.articlePhoto.photo = response.data;
                });
            }
        }
    }
</script>

<style scoped>
    .article {
        padding-bottom: 60px;
    }

    .article-social {
        padding-bottom: 1.5rem;
        margin-bottom: 4rem;
        border-bottom: 1px solid #D6D6D6;
    }

    .article-social .rating {
        margin-top: 50px;
    }

    .article p {
        margin-bottom: 40px;
    }

    .article p:first-child {
        font-weight: 500;
    }

    .article p:last-child {
        margin-bottom: 0;
    }

    .article img {
        margin-bottom: 40px;
    }

    .article h1,
    .article h2,
    .article h3,
    .article h4,
    .article h5,
    .article h6 {
        margin-top: 0;
        margin-bottom: 40px;
    }

    .article-social {
        display: flex;
        justify-content: space-between;
    }

    .article-social .rating {
        margin-top: 0;
    }
</style>
