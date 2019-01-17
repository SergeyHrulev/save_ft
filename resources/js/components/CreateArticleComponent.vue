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
                    <article class="article" v-bind="text">
                        {{ text }}
                    </article>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Текст статьи</label>
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
                published: false,
                edited_text: '',
            }
        },
        methods:{
            saveArticle(){
                axios.post('/articles', {
                    meta_title: this.meta_title,
                    meta_description: this.meta_description,
                    title: this.title,
                    subtitle: this.subtitle,
                    text: this.text,
                    published: this.published,
                }).then(response => {
                    console.log(response.data);
                })
            },
            setParagraph(){

            },
            setImage(){

            },
            setBlockqoute(){

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
