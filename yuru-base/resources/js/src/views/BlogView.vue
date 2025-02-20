<script setup>
    import PageNavigation from '@/components/PageNavigation.vue';
    import BlogPost from '../sections/blog/BlogPost.vue';
    import { RouterLink, useRoute } from 'vue-router';
    import { computed } from 'vue';
    import Categories from '../sections/blog/Categories.vue';
    import BlogCreate from '../sections/blog/BlogCreate.vue';

    const route = useRoute();

    const isBlogRoute = computed(() => route.path.endsWith('/blog'));
    const isCategoryRoute = computed(() => route.path.endsWith('/categories'));
    const isBlogCreateRoute = computed(() => route.path.endsWith('/blog/post'));
    
</script>

<template>
    <PageNavigation />
    <BlogPost v-if="isBlogRoute"/>
    <Categories v-if="isCategoryRoute"/>
    <BlogCreate v-if="isBlogCreateRoute"/>
</template>