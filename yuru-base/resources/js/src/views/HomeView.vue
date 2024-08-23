<script setup>
    import ExampleComponent from '@/components/ExampleComponent.vue';
    // import BlogPostComponent from '@/components/BlogPostComponent.vue';
    import { RouterLink } from 'vue-router';
</script>

<template>
    <ExampleComponent />
    <br>
    <!-- <BlogPostComponent/> -->
    <br>
    <br>
    <RouterLink 
    to='/home'
    class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2 mt-4">
        Home
    </RouterLink>

    <RouterLink 
    to='/route_test'
    class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2 mt-4">
        Route Test
    </RouterLink>

    <RouterLink 
    to='/hasda'
    class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2 mt-4">
        Broken
    </RouterLink>
</template>