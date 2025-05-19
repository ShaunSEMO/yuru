import BlogView from '../views/BlogView.vue';

export default [
    {
        path: '/blog',
        name: 'Blog',
        component: BlogView,
    },
    {
        path: '/blog/categories',
        name: 'Categories',
        component: BlogView,
    },
    {
        path: '/blog/post',
        name: 'BlogCreate',
        component: BlogView,
    },
    {
        path: '/blog/categories/create',
        name: 'CategoryCreate',
        component: BlogView,
    },
    {
        path: '/blog/category/:id',
        name: 'CategoryEdit',
        component: BlogView,
    }
];
