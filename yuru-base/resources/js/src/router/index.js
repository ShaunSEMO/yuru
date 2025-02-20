import {createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import NotFoundView from '@/views/NotFoundView.vue';
import RouteTest from '../views/RouteTest.vue';
import blogRoutes from './blogRoutes';

const router = createRouter({
    history: createWebHistory('/admin'),
    routes: [
        {
            path: '/home',
            name: 'home',
            component: HomeView
        },
        ...blogRoutes,
        {
            path: '/route_test',
            name: 'routeTest',
            component: RouteTest,
        },
        {
            path: '/:pathMatch(.*)*',
            name: 'notFound',
            component: NotFoundView
        }
    ]
});

export default router;