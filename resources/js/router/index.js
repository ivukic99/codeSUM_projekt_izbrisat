import Vue from 'vue';
import Router from 'vue-router';

import Landing from '../views/Landing.vue';
import Login from '../views/auth/Login.vue';
import Register from '../views/auth/Register.vue';

Vue.use(Router);

const routes = [
    {
        path: '/hah',
        name: 'Naslovnica',
        component: Landing
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'Register',
        component: Register
    },
]

export default new Router({
    mode: 'history',
    routes
});