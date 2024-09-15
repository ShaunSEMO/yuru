<script setup>
    import '@fortawesome/fontawesome-free/css/all.css';
    import { RouterLink } from 'vue-router';
</script>

<template>
    <nav class="bg-primaryShade-dark text-white w-12 md:w-16 lg:w-20 h-5/6 fixed rounded-full flex flex-col items-center py-4 space-y-6">
        <RouterLink to="/home">
            <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class="fas fa-home fa-lg"></i>
            </button>
        </RouterLink>
        <RouterLink to="/blog">
            <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class="fas fa-user fa-lg"></i>
            </button>
        </RouterLink>
        <RouterLink to="/commerce">
                <button class="p-2 rounded-full hover:bg-secondaryShade-dark transition">
                <i class="fas fa-phone fa-lg"></i>
            </button>
        </RouterLink>
  </nav>
</template>