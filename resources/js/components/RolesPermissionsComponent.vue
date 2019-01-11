<template>
    <div class="cms-content__item">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Роль</th>
                <th scope="col">Права</th>
                <th scope="col">Добавить права</th>
                <th scope="col">Редактирование</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="role in roles">
                <th scope="row">{{ role.id }}</th>
                <td>{{ role.name }}</td>
                <td>
                    <ul>
                        <li v-for="permission in role.permissions">{{ permission.name }}</li>
                    </ul>
                </td>
                <td><input type="text" v-model="permission"></td>
                <td>
                    <button type="button" class="btn btn-primary" @click="setPermission(role.id)">Добавить</button>
                    <button type="button" class="btn btn-warning">Удалить</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label class="sr-only">Добавить роль</label>
                    <input type="text" class="form-control" v-model="role" placeholder="Добавить роль">
                </div>
                <button type="button" @click="setRole" class="btn btn-primary mb-2">Сохранить</button>
            </form>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "RolesPermissionsComponent",
        data(){
            return{
                role: '',
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
                    this.permission = '';
                });
            },
            setRole(){
                axios.post('/admin-dashboard/set-role', {
                    role: this.role
                }).then(response => {
                    this.roles = response.data;
                    this.role = '';
                });
            }
        }
    }
</script>

<style scoped>

</style>
