<template>
    <div class="cms-content__item">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя пользователя</th>
                <th scope="col">Роль</th>
                <th scope="col">Дата регистрации</th>
                <th scope="col">Редактирование</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users">
                <th scope="row">{{ user.id }}</th>
                <td>{{ user.name }}</td>
                <td v-if="user.roles !== 0" v-for="role in user.roles">{{ role.name }}</td>
                <td v-else>' '</td>
                <td>{{ user.email_verified_at }}</td>
                <td>
                    <button type="button" class="btn btn-primary">Редактировать</button>
                    <button type="button" class="btn btn-warning">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "UsersListComponent",
        data(){
            return{
                users: {}
            }
        },
        beforeCreate(){
            axios.get('/admin-dashboard/get-users-with-roles').then(response => {
                this.users = response.data;
            });
        },
        methods:{
            editUser(){

            },
            dropUser(){

            }
        }
    }
</script>

<style scoped>

</style>
