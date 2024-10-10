<script setup>
    import PageNavigation from '@/components/PageNavigation.vue';
    import BlogPost from '../sections/BlogPost.vue';
    import { RouterLink, useRoute } from 'vue-router';
    import { computed } from 'vue';
import Categories from '../sections/Categories.vue';

    const route = useRoute();

    const isBlogRoute = computed(() => route.path.endsWith('/blog'));
    const isCategoryRoute = computed(() => route.path.endsWith('/categories'));
</script>

<template>
    <PageNavigation />
    <BlogPost v-if="isBlogRoute"/>
    <Categories v-if="isCategoryRoute"/>
</template>

<!-- <script setup>
    import BlogPostComponent from '@/components/BlogPostComponent.vue';
    import PageNavigation from '@/components/PageNavigation.vue';
    import Categories from '../sections/Categories.vue';
    import { computed } from 'vue';yy

    const isBlogRoute = computed(() => route.path.startsWith('/blog'));
    const isCategoryRoute = computed(() => route.path === '/blog/categories');

</script>

<template>
    <PageNavigation />
    <BlogPostComponent v-if="isBlogRoute"/>
    <Categories v-if="isCategoryRoute"/>    
</template> -->