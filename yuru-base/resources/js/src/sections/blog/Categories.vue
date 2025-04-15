<script setup>
    import { onMounted, reactive } from 'vue';
    import Card from '../../components/base/Card.vue';
    import { useToast } from 'vue-toastification';
    import axios from 'axios';

    const toast = useToast();

    const state = reactive({
        categories: []
    });

    onMounted(async () => {
        try {
            const response = await axios.get('/categories');
            state.categories = response.data;     
        } catch (error) {
            toast.error(error, 1000);
            console.log(error)
        };
    });

</script>

<template>
    <div class="container mx-auto p-6">
    
        <button class="bg-signYellow-default min-h-10 min-w-20 rounded-full">
            <RouterLink to="/blog/categories/create">
                Create 
            </RouterLink>   
        </button>

        <br><br>
        
        <div class="rounded-3xl p-10 grid grid-flow-col grid-rows-4 gap-6">
            <Card 
                v-for="category in state.categories">
                <h1>Card per category</h1>
            </Card>
        </div>
    </div>
</template>