import Vue from 'vue';
import Router from 'vue-router';

import Landing from '../views/Landing.vue';
import ExampleComponent from '../components/ExampleComponent.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Example',
        component: ExampleComponent
    },
    {
        path: '/naslovnica',
        name: 'Landing',
        component: Landing
    }
]

export default new Router({
    mode: 'history',
    routes
});