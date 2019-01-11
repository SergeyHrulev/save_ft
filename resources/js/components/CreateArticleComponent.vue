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
            <div class="form-group">
                <label for="">Текст статьи</label>
                <editor></editor>
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
            }
        }
    }
</script>

<style scoped>

</style>
