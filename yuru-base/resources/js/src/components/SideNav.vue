<script setup>
    import 'boxicons/css/boxicons.min.css';
    import { RouterLink } from 'vue-router';
</script>

<template>
    <nav class="bg-primaryShade-dark text-white w-12 md:w-16 lg:w-20 h-5/6 fixed rounded-full flex flex-col items-center py-4 space-y-6">
        <RouterLink to="/home">
            <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class='bx text-2xl bxs-pie-chart-alt-2'></i>
            </button>
        </RouterLink>
        <RouterLink to="/blog">
            <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class='bx text-2xl bxs-news'></i>
            </button>
        </RouterLink>
        <RouterLink to="/commerce">
            <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class='bx text-2xl bxs-store'></i>
            </button>
        </RouterLink>
  </nav>
</template>