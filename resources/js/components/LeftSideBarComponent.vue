<template>
    <div class="cms-sidebar">
        <div class="cms-menu">
            <div class="cms-menu__item" style="min-height: 40px;">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true" style="color: #fff;">&times;</span>
                </button>
            </div>
            <div class="cms-menu__item" :class="{ active: tabs.users }" @click="selectMenu('users')">Пользователи</div>
            <div class="cms-menu__item" :class="{ active: tabs.roles }" @click="selectMenu('roles')">Роли и права пользователей</div>
            <div class="cms-menu__item" :class="{ active: tabs.articles }" @click="selectMenu('articles')">Статьи</div>
        </div>
        <div class="cms-exit">
            <button>Выйти</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LeftSideBarComponent",
        data(){
            return{
                tabs: {
                    users: true,
                    roles: false,
                    articles: false,
                }
            }
        },
        methods: {
            selectMenu(attr){
                for (var key in this.tabs){
                    this.tabs[key] = false;
                }
                this.$parent.$emit('changeAttributes', attr);
                this.tabs[attr] = true;
            }
        }
    }
</script>

<style scoped>
    .active {
        background: #36aaec;
    }
</style>
