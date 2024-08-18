<script setup>
    import ExampleComponent from '@/components/ExampleComponent.vue';
    import TestComponent from '@/components/TestComponent.vue';
    import { RouterLink } from 'vue-router';
</script>

<template>
    <ExampleComponent />
    <TestComponent />
    <RouterLink 
    to='/'
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