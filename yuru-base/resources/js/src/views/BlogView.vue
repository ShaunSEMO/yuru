<script setup>
    import PageNavigation from '@/components/PageNavigation.vue';
    import BlogPost from '../sections/blog/BlogPost.vue';
    import { RouterLink, useRoute } from 'vue-router';
    import { computed } from 'vue';
    import Categories from '../sections/blog/Categories.vue';
    import BlogCreate from '../sections/blog/BlogCreate.vue';
    import CategoryCreate from '../sections/blog/CategoryCreate.vue';

    const route = useRoute();

    const isBlogRoute = computed(() => route.path.endsWith('/blog'));
    const isCategoryRoute = computed(() => route.path.endsWith('/categories'));
    const isBlogCreateRoute = computed(() => route.path.endsWith('/blog/post'));
    const isBlogCategoryCreate = computed(() => route.path.endsWith('/blog/categories/create'));
    
</script>

<template>
    <PageNavigation />
    <BlogPost v-if="isBlogRoute"/>
    <Categories v-if="isCategoryRoute"/>
    <BlogCreate v-if="isBlogCreateRoute"/>
    <CategoryCreate v-if="isBlogCategoryCreate"/>
</template>