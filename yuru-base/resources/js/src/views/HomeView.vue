<script setup>
    import ExampleComponent from '@/components/ExampleComponent.vue';
    import BlogPostComponent from '@/components/BlogPostComponent.vue';
    import { RouterLink } from 'vue-router';
    import { ref, onMounted } from 'vue';

    const menuButton = ref(null);
    const mobileMenu = ref(null);

    const toggleMenu = () => {
        if (mobileMenu.value) {
            mobileMenu.value.classList.toggle('hidden');
        }
    };

    onMounted(() => {
        if (menuButton.value) {
            menuButton.value.addEventListener('click', toggleMenu);
        }
    });
</script>

<template>
    <nav class="bg-green-700 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold">
            <RouterLink to="/home" class="hover:text-green-300">REST Api</RouterLink>
        </div>

        <!-- Menu Button (for mobile) -->
        <div class="lg:hidden">
            <button id="menuButton" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
            </button>
        </div>

        <!-- Links -->
        <div class="hidden lg:flex space-x-6">
            <RouterLink 
            to="/home"
            class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2">
            Home
            </RouterLink>
            <RouterLink 
            to="/route_test"
            class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2">
            Route Test
            </RouterLink>
            <RouterLink 
            to="/hasda"
            class="text-white bg-green-700 hover:bg-green-900 rounded-md px-3 py-2">
            Broken
            </RouterLink>
        </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden hidden">
        <RouterLink 
            to="/home"
            class="block text-white bg-green-700 hover:bg-green-900 rounded-md px-4 py-2">
            Home
        </RouterLink>
        <RouterLink 
            to="/route_test"
            class="block text-white bg-green-700 hover:bg-green-900 rounded-md px-4 py-2">
            Route Test
        </RouterLink>
        <RouterLink 
            to="/hasda"
            class="block text-white bg-green-700 hover:bg-green-900 rounded-md px-4 py-2">
            Broken
        </RouterLink>
        </div>
    </nav>
    <BlogPostComponent/>
</template>