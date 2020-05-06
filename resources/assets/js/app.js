
// Import IE polyfill for Vue
// import "babel-polyfill";

// Require bootstrapped js
require('./bootstrap');

// Require Vue
window.Vue = require('vue');

Vue.component('navbar-menu', require('./components/NavbarMenu.vue').default);
Vue.component('activities', require('./components/Activities.vue').default);

const app = new Vue({
    el: '#app'
});
