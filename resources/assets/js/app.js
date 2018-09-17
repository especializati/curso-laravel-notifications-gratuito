
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import store from './vuex/store'

window.Vue = require('vue');

/**
 * Components
 */
Vue.component('notifications', require('./components/notifications/Notifications'));
Vue.component('notification', require('./components/notifications/Notification'));
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    store,
    el: '#app'
});
