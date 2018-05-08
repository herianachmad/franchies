
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('posts',
require('./components/Posts.vue'));

Vue.component('users',
 require('./components/Administrator/Users.vue'));

Vue.component('categories',
require('./components/Administrator/Categories.vue'));
// import users from './components/Administrator/Users.vue';

const app = new Vue({
    el: '#app',
});

//add custom js admin-lte
// $('.sidebar-toggle').on('click',function(){
//
//   var cls = $('body').hasClass('sidebar-collapse');
//   if(cls == true){
//     $('body').removeClass('sidebar-collapse');
//   } else{
//     $('body').addClass('sidebar-collapse');
//   }
// });
