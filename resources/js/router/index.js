import Vue from 'vue';
import Router from 'vue-router';

import Landing from '../views/Landing.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Naslovnica',
        component: Landing
    },
]

export default new Router({
    mode: 'history',
    routes
});