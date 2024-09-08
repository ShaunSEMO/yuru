import {createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import NotFoundView from '@/views/NotFoundView.vue';
import RouteTest from '../views/RouteTest.vue';

const router = createRouter({
    history: createWebHistory('/app'),
    routes: [
        {
            path: '/home',
            name: 'home',
            component: HomeView
        },
        {
            path: '/route_test',
            name: 'routeTest',
            component: RouteTest,
        },
        {
            path: '/:catchall(.*)',
            name: 'notFound',
            component: NotFoundView
        }
    ]
});

export default router;