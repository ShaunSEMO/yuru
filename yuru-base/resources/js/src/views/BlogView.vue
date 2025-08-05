<script setup>
    import PageNavigation from '@/components/PageNavigation.vue';
    import BlogPost from '../sections/blog/BlogPosts.vue';
    import { RouterLink, useRoute } from 'vue-router';
    import { computed } from 'vue';
    import Categories from '../sections/blog/Categories.vue';
    import BlogCreate from '../sections/blog/BlogCreate.vue';
    import CategoryCreate from '../sections/blog/CategoryCreate.vue';
    import CategoryEdit from '../sections/blog/CategoryEdit.vue';

    const route = useRoute();

    const isBlogRoute = computed(() => route.name === 'Blog');
    const isCategoryRoute = computed(() => route.name === 'Categories');
    const isBlogCreateRoute = computed(() => route.name === 'BlogCreate');
    const isBlogCategoryCreate = computed(() => route.name === 'CategoryCreate');
    const isBlogCategoryEdit = computed(() => route.name === 'CategoryEdit');
    
</script>

<template>
    <PageNavigation />
    <BlogPost v-if="isBlogRoute"/>
    <BlogCreate v-if="isBlogCreateRoute"/>
    <Categories v-if="isCategoryRoute"/>
    <CategoryCreate v-if="isBlogCategoryCreate"/>
    <CategoryEdit v-if="isBlogCategoryEdit"/>
</template>