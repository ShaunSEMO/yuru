<script setup>
    import { ref, onMounted } from 'vue';
    import axios from 'axios';

    const posts = ref([]);
    const newPost = ref({
        title: '', 
        post_body: ''
        })

    const fetchPosts = async () => {
        const response = await axios.get('/api/posts');
        posts.value = response.data;
    }

    const createPost = async () => {
        await axios.post('/api/items', newPost.value);
        await fetchPosts();
        newPost.value = {
            title: '',
            post_body: ''
        }
    } 

    const updatePost = async (post) => {
        await axios.put('/api/posts/${post.id}', post);
        await fetchPosts();
    }

    const deletePost = async (id) => {
        await axios.delete('/api/items/${id}', id);
        await fetchPosts();
    }

    onMounted(fetchPosts);
</script>

<template>
    <template>
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Blog Posts</h1>

            <ul class="space-y-4 mb-8">
                <li v-for="post in posts" :key="post.id" class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-700">{{ post.title }}</h2>
                        <p class="text-gray-500">{{ post.post_body }}</p>
                    </div>
                    <div class="flex space-x-3">
                        <button 
                            @click="updatePost(post)" 
                            class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                            Update
                        </button>
                        <button 
                            @click="deletePost(post.id)" 
                            class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">
                            Delete
                        </button>
                    </div>
                </li>
            </ul>

            <!-- Add New Item -->
            <div class="bg-gray-100 shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-700">Add New Post</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <input 
                        v-model="newPost.title" 
                        placeholder="Name" 
                        class="border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                    <input 
                        v-model="newPost.post_body" 
                        placeholder="Description" 
                        class="border border-gray-300 rounded-md px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    >
                </div>
                <button 
                    @click="createPost" 
                    class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-700 transition">
                    Create
                </button>
            </div>
        </div>
    </template>

</template>