
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue' //Importing
Vue.use(BootstrapVue)
Vue.use(require('bootstrap-vue')); // Telling Vue to use this in whole application

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('all_table', require('./components/all_table.vue').default);
Vue.component('create_modal', require('./components/create_modal.vue').default);
Vue.component('create_customer', require('./components/create_customer.vue').default);
Vue.component('create_user', require('./components/create_user.vue').default);
Vue.component('tab-info', require('./components/tab-info.vue').default);
Vue.component('tab-lineitems', require('./components/tab-lineitems.vue').default);
Vue.component('tab_archive', require('./components/tab_archive.vue').default);
Vue.component('info-panel', require('./components/info-panel.vue').default);
Vue.component('doc-tabs', require('./components/doc-tabs.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app'
});


