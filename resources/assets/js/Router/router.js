import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Dashboard from '../components/Dashboard'
import Login from '../components/login/Login'

const routes = [
  { path: '/', component: Dashboard },
  { path: '/login', component: Login }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})


export default router;  