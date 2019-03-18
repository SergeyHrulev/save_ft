<template>
    <div class="cms-content__item">
        <div class="col-12 pt-1 pb-5 d-flex justify-content-around">
            <form action="" class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="введите раздел">
                </div>
                <button class="btn btn-outline-primary">Добавить раздел</button>
            </form>
            <a :href="url" class="btn btn-lg btn-primary">
                Создать статью
            </a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название статьи</th>
                <th scope="col">Дата создания</th>
                <th scope="col">Редактирование</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="glossary in glossaries">
                <th scope="row">{{ glossary.id }}</th>
                <td>{{ glossary.title }}</td>
                <td>{{ glossary.created_at }}</td>
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
    export default {
        name: "GlossariesComponent",
        props: ['url'],
        data(){
            return{
                glossaries: {}
            }
        },
        beforeMount(){
            this.getGlossaries();
        },
        methods:{
            getGlossaries(){
                axios.get('/admin-dashboard/get-glossaries').then(res => {
                    console.log(res.data);
                    this.glossaries = res.data;
                });
            }
        }
    }
</script>

<style scoped>

</style>
