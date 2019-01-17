<template>
    <div class="cms">
        <div class="cms-container">

            <!--<left-side-bar-component></left-side-bar-component>-->
            <!-- /cms-sidebar -->

            <div class="cms-content">
                <users-list-component v-if="tabs.users"></users-list-component>
                <roles-permissions-component v-if="tabs.roles"></roles-permissions-component>
                <create-article-component v-if="tabs.articles"></create-article-component>
                <!-- /cms-content__item -->
            </div>
            <!-- /cms-content -->

        </div>
        <!-- /cms-container -->
    </div>
    <!-- /cms -->

    <!--<div class="cms-edit-user">-->
        <!--&lt;!&ndash;//= html/personal-area/options.html&ndash;&gt;-->
    <!--</div>-->
    <!-- /cms-edit-user -->
</template>

<script>
    export default {
        name: "MainDashboardComponent",
        data(){
            return{
                tabs:{
                    users: true,
                    roles: false,
                    articles: false,
                }
            }
        },
        computed: {
            onChange() {
                this.$on('changeAttributes', function (attr) {
                    for (var key in this.tabs){
                        this.tabs[key] = false;
                    }
                    this.tabs[attr] = true;
                })
            }
        }
    }
</script>

<style scoped>

</style>
