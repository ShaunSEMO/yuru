<script setup>
    import { RouterView } from 'vue-router';
    import SideNav from './components/SideNav.vue';
</script>

<template>
    <div class="grid grid-cols-12 min-h-screen bg-baseShade-dark">
        <div class="col-span-2 p-4 hidden md:block">
            <SideNav />
        </div>

        <div class="col-span-12 md:col-span-10 p-4">  
            <RouterView />
        </div>
    </div>
</template>
  