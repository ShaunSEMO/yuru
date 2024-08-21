<script setup>
    import { RouterLink } from 'vue-router';
</script>

<template>
    <h3>Route exists</h3>
    <h1>This is route test</h1>
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