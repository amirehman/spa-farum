require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

//Helpes

import User from './Helpers/User'

window.User = User


Vue.component('AppHome', require('./components/AppHome.vue'));

import router from './Router/router.js'

const app = new Vue({
    el: '#app',
    router
});
