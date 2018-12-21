<template>
    <div class="cms-content__item">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Роль</th>
                <th scope="col">Права</th>
                <th scope="col">Редактирование</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="role in roles">
                <th scope="row">{{ role.id }}</th>
                <td>{{ role.name }}</td>
                <td><input type="text" v-model="permission"></td>
                <td>
                    <button type="button" class="btn btn-primary" @click="setPermission(role.id)">Добавить</button>
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
        name: "RolesPermissionsComponent",
        data(){
            return{
                permission: '',
                roles:{}
            }
        },
        beforeCreate(){
            axios.get('/admin-dashboard/get-roles-permissions').then(response => {
                this.roles = response.data;
            });
        },
        methods:{
            setPermission(id){
                axios.post('/admin-dashboard/set-permission', {
                    role: id,
                    permission: this.permission,
                }).then(response => {
                    this.roles = response.data;

                });
            }
        }
    }
</script>

<style scoped>

</style>
