import Vue from 'vue';
import Router from 'vue-router';

import Landing from '../views/Landing.vue';
import Auth from '../views/auth/Auth.vue';
import Courses from '../views/Courses.vue';
import BecomeMember from '../views/BecomeMember.vue';
import Home from '../views/Home.vue';
import Stanko from '../views/creators/Stanko.vue';
import Igor from '../views/creators/Igor.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Naslovnica',
        component: Landing
    },
    {
        path: '/tecajevi',
        name: 'Tecajevi',
        component: Courses
    },
    {
        path: '/postani_clan',
        name: 'Postani clan',
        component: BecomeMember
    },
    {
        path: '/auth',
        name: 'Auth',
        component: Auth
    },
    {
        path: '/kreatori/stanko',
        name: 'Stanko',
        component: Stanko
    },
    {
        path: '/kreatori/igor',
        name: 'Igor',
        component: Igor
    },
    {
        path: '/naslovnica',
        name: 'Pocetna',
        component: Home
    },
]

export default new Router({
    mode: 'history',
    routes
});