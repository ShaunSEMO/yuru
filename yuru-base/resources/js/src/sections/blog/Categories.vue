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
    
        <div class="p-10">
            <button class="bg-signYellow-default min-h-10 min-w-20 rounded-full">
                <RouterLink to="/blog/categories/create">
                    Create 
                </RouterLink>   
            </button>

            <br><br>
            
            <div class="rounded-3xl grid grid-cols-3 gap-6">
                <div v-for="category in state.categories">
                    <RouterLink :to="'/blog/category/' + category.id">
                        <Card>
                            <h1>{{ category.category_name }}</h1>
                        </Card>
                    </RouterLink>
                </div>
            </div>
        </div>
        
    </div>
</template>