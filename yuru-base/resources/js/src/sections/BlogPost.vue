<script setup>
    import { ref, onMounted } from 'vue';
    import axios from 'axios';

    const posts = ref([]);
    const newPost = ref({
        title: '', 
        post_body: ''
        })

    const fetchPosts = async () => {
        const response = await axios.get('/posts');
        posts.value = response.data;
    }

    const createPost = async () => {
        await axios.post('/posts', newPost.value);
        await fetchPosts();
        newPost.value = {
            title: '',
            post_body: ''
        }
    } 

    const updatePost = async (post) => {
        await axios.put('/posts${post.id}', post);
        await fetchPosts();
    }

    const deletePost = async (id) => {
        await axios.delete('/post/${id}', id);
        await fetchPosts();
    }

    onMounted(fetchPosts);
</script>

<template>
    <div class="container mx-auto p-6">
        
        <button class="bg-signYellow-default min-h-10 min-w-20 rounded-full">
            <RouterLink to="/home">
                Create  
            </RouterLink>   
        </button>
        <br><br>
        <div class="bg-primaryShade-dark rounded-sm min-h-100 min-w-200">
            <h3>Blog posts</h3>
        </div>
    </div>
</template>