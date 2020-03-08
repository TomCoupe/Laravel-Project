require('./bootstrap');
window.Vue = require('vue');

import homepage from './components/Homepage.vue';

Vue.component('homepage', require('./components/Homepage.vue').default);

const app = new Vue({
    el: '.main',
});