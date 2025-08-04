<script setup>
    import { ref, onMounted, reactive } from 'vue';
    import axios from 'axios';
    import Card from '../../components/base/Card.vue';
    import { useToast } from 'vue-toastification';

    const toast = useToast();

    const state = reactive({
        posts: [] 
    });

    onMounted(async () => {
        try {
            const response = await axios.get('/posts');
            state.posts = response.data;
        } catch {
            toast.error(error, 1000);
            console.log(error)
        };
    });
</script>

<template>
    <div class="container mx-auto p-6">
        <div class="p-10">
            <RouterLink class="inline-flex items-center justify-center bg-signYellow-default min-h-10 min-w-20 rounded-full" to="/blog/post">
                Create  
            </RouterLink>

            <br><br>

            <div class="rounded-3xl grid grid-cols-3 gap-6">
                <div v-for="post in state.posts">
                    <Card>
                        <h3>{{ post.title }}</h3>
                    </Card>
                </div>
            </div>
        </div>
    </div>
</template>