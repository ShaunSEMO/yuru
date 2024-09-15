<script setup>
    import ExampleComponent from '@/components/ExampleComponent.vue';
    import PageNavigation from '@/components/PageNavigation.vue';
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
    <PageNavigation />
    <h1 class="text-slate-50">
        Dashboard view
    </h1>
</template>