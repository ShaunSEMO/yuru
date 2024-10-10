<script setup>
    import { RouterLink, useRoute } from 'vue-router';
    import { computed } from 'vue';

    const route = useRoute();

    // Show `div-one` for a specific route
    const isHomeRoute = computed(() => route.path.startsWith('/home'));
    const isBlogRoute = computed(() => route.path.startsWith('/blog'));
</script>

<template>
    <nav class="bg-primaryShade-dark text-white p-2 md:p-4 rounded-full mx-auto max-w-xs sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl">
        <ul v-if="isHomeRoute" class="flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-6">
                <RouterLink 
                to="/home"
                class="w-full md:w-auto px-4 py-2 rounded-full hover:bg-secondaryShade-dark transition">
                Home
                </RouterLink>
                <RouterLink 
                to="/route_test"
                class="w-full md:w-auto px-4 py-2 rounded-full hover:bg-secondaryShade-dark transition">
                Route Test
                </RouterLink>
                <RouterLink 
                to="/hasda"
                class="w-full md:w-auto px-4 py-2 rounded-full hover:bg-secondaryShade-dark transition">
                Broken
                </RouterLink>
        </ul>

        <ul v-if="isBlogRoute" class="flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 md:space-x-6">
                <RouterLink 
                to="/blog"
                class="w-full md:w-auto px-4 py-2 rounded-full hover:bg-secondaryShade-dark transition">
                Posts
                </RouterLink>
                <RouterLink 
                to="/blog/categories"
                class="w-full md:w-auto px-4 py-2 rounded-full hover:bg-secondaryShade-dark transition">
                Categories
                </RouterLink>
        </ul>
    </nav>
</template>