<template>
    <div class="cms-content__item">
        <div class="col-12 pt-1 pb-5 d-flex justify-content-end" v-show="showTable">
            <button class="btn btn-lg btn-primary" @click="createArticle">
                Создать статью
            </button>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название статьи</th>
                <th scope="col">Подзаголовок</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Редактирование</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="article in articles">
                <th scope="row">{{ article.id }}</th>
                <td>{{ article.title }}</td>
                <td>{{ article.subtitle }}</td>
                <td>{{ article.created_at }}</td>
                <td>
                    <button type="button" class="btn btn-primary" @click="editArticles(article.id)">Редактировать</button>
                    <button type="button" class="btn btn-warning" @click="deleteArticle(article.id)">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
    import axios from 'axios';
    import CreateArticleComponent from '../components/CreateArticleComponent';
    export default {
        name: "ArticleListComponent",
        comments: {
            CreateArticleComponent,
        },
        data(){
            return{
                showTable: true,
                articles:{}
            }
        },
        created(){
            this.getAllArticles();
        },
        methods:{
            getAllArticles(){
                axios.get('/admin-dashboard/articles/index').then(response => {
                    this.articles = response.data;
                })
            },
            editArticles(id){
                alert(window.location.href = window.location + '/edit/' + id);
            },
            deleteArticle(id){
                axios.post('/admin-dashboard/articles/delete', {
                    id: id,
                }).then(response => {
                    alert(response.data);
                    this.getAllArticles();
                })
            },
            createArticle(){
                window.location.href = window.location + '/create/';
            }
        },
    }
</script>

<style scoped>

</style>
