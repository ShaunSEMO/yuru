import {createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import NotFoundView from '@/views/NotFoundView.vue';
import RouteTest from '../views/RouteTest.vue';
import BlogView from '../views/BlogView.vue';
import Categories from '../sections/Categories.vue';

const router = createRouter({
    history: createWebHistory('/admin'),
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
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogView
        },
        {
            path: '/blog/categories',
            name: 'categories',
            component: BlogView
        }
    ]
});

export default router;