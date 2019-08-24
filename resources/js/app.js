
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('slick-carousel');
require('./script');
require('jquery-datetimepicker');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import ExampleComponent from './components/ExampleComponent.vue';
import UsersListComponent from './components/UsersListComponent.vue';
import RolesPermissionsComponent from './components/RolesPermissionsComponent.vue';
import CreateArticleComponent from './components/CreateArticleComponent.vue';
import ArticleListComponent from './components/ArticleListComponent.vue';
import GlossariesComponent from './components/GlossariesComponent.vue';
import CreateGlossaryComponent from './components/CreateGlossaryComponent.vue';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent,
        UsersListComponent,
        RolesPermissionsComponent,
        CreateArticleComponent,
        ArticleListComponent,
        GlossariesComponent,
        CreateGlossaryComponent,
    },
    data:{
        user: 'name',
    }
});
const dashboard = new Vue({
    el: '#dashboard',
    components: {
        CreateGlossaryComponent,
        GlossariesComponent
    },
    data: {
        user: 'name'
    }
});

$('#myModal').modal('show');

