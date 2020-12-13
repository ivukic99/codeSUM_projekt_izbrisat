import Vue from 'vue';
import Router from 'vue-router';

import Landing from '../views/Landing.vue';
import Auth from '../views/auth/Auth.vue';
import Courses from '../views/Courses.vue';
import BecomeMember from '../views/BecomeMember.vue';
import Home from '../views/Home.vue';
import Stanko from '../views/creators/Stanko.vue';
import Igor from '../views/creators/Igor.vue';

import Middleware from '../middleware/index.js';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Naslovnica',
        component: Landing,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/tecajevi',
        name: 'Tecajevi',
        component: Courses,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/postani_clan',
        name: 'Postani clan',
        component: BecomeMember,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/auth',
        name: 'Auth',
        component: Auth,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/kreatori/stanko',
        name: 'Stanko',
        component: Stanko,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/kreatori/igor',
        name: 'Igor',
        component: Igor,
        meta: {
            middleware: [Middleware.guest]
        }
    },
    {
        path: '/naslovnica',
        name: 'Pocetna',
        component: Home,
        meta: {
            middleware: [Middleware.auth]
        }
    },
]

const router = new Router({
    mode: 'history',
    routes
});

// Creates a `nextMiddleware()` function which not only
// runs the default `next()` callback but also triggers
// the subsequent Middleware function.
function nextFactory(context, middleware, index) {
      const subsequentMiddleware = middleware[index];
      // If no subsequent Middleware exists,
      // the default `next()` callback is returned.
      if (!subsequentMiddleware) return context.next;
    
      return (...parameters) => {
        // Run the default Vue Router `next()` callback first.
        context.next(...parameters);
        // Then run the subsequent Middleware with a new
        // `nextMiddleware()` callback.
        const nextMiddleware = nextFactory(context, middleware, 1);
        subsequentMiddleware({ ...context, next: nextMiddleware });
      };
    }
    
    router.beforeEach((to, from, next) => {
      if (to.meta.middleware) {
        const middleware = Array.isArray(to.meta.middleware)
          ? to.meta.middleware
          : [to.meta.middleware];
    
        const context = {
          from,
          next,
          router,
          to,
        };
        const nextMiddleware = nextFactory(context, middleware, 1);
    
        return middleware[0]({ ...context, next: nextMiddleware });
      }
    
      return next();
    });

export default router;