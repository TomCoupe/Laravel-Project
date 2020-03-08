require('./bootstrap');
window.Vue = require('vue');

import homepage from './components/homepage.vue';

Vue.component('homepage', (homepage).default);

const app = new Vue({
    el: '#app'
});