<script setup>
    import { RouterView } from 'vue-router';
    import { ref, onMounted, reactive } from 'vue';
    import Quill from 'quill';
    import 'quill/dist/quill.snow.css'; // Make sure you import Quill's CSS
    import { useToast } from 'vue-toastification';
    import axios from 'axios';

    const editorContainer = ref(null); // Create a ref for the editor

    const toast = useToast();
    
    const state = reactive({
        categories: [],
        selectedCategory: ''
    });

    onMounted(async () => {
        if (editorContainer.value) {
            new Quill(editorContainer.value, {
                theme: 'snow' // 'snow' is the default theme, you can use 'bubble' too
            });
        };

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

        <table class="border-separate border-spacing-x-5">
            <tr>
                <th>
                    <button class="bg-signYellow-default min-h-9 min-w-20 rounded-full">Save</button>
                </th>
                <th>
                    <button class="bg-secondaryShade-dark min-h-9 min-w-20 rounded-full">Cancel</button>
                </th>
                <th>
                    <button class="border-2 border-green-500 min-h-9 min-w-20 rounded-full text-green-500">Publish</button> 
                </th>
                <th>
                    <button class="bg-red-400 min-h-9 min-w-20 rounded-full">Delete</button> 
                </th>
            </tr>
        </table>

        <br>

        <div class="bg-primaryShade-dark rounded-3xl p-10 pb-20">
            <!-- <form>
                <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-3">
                        <input type="text" name="title" class="border-0 rounded-full bg-secondaryShade-dark min-h-10 focus:ring-0">
                        <br><br>
                        <select v-model="state.selectedCategory" id="category" name="category" class="block min-h-10 rounded-full bg-secondaryShade-dark">
                            <option value="" disabled selected>Select category</option>
                            <option v-for="category in state.categories" :key="category.id" :value="category.id">
                                {{ category.category_name }}
                            </option>
                        </select>
                    </div>
                    <div class="row-span-3">
                        <div ref="editorContainer">
                            
                        </div>
                    </div>
                </div>
            </form> -->

            <form @submit.prevent="submitPost">
                <!-- Form fields section -->
                <div class="mb-6">
                    <input 
                        type="text" 
                        name="title" 
                        v-model="state.title"
                        placeholder="Blog post title"
                        class="border-0 rounded-full bg-secondaryShade-dark min-h-10 focus:ring-0 mb-4 p-2">
                    
                    <input 
                        type="text" 
                        name="subheading" 
                        v-model="state.subheading"
                        placeholder="Brief description or subtitle"
                        class="border-0 rounded-full bg-secondaryShade-dark min-h-10 focus:ring-0 mb-4 p-2">
                    
                    <select 
                        v-model="state.selectedCategory" 
                        id="category" 
                        name="category" 
                        class="block min-h-10 rounded-full bg-secondaryShade-dark mb-4 p-2">
                        <option value="" disabled selected>Select category</option>
                        <option v-for="category in state.categories" :key="category.id" :value="category.id">
                            {{ category.category_name }}
                        </option>
                    </select>
                    <input 
                        type="file" 
                        name="header_image"
                        placeholder="Header image URL"
                        class="border-0 rounded-full bg-secondaryShade-dark min-h-10 focus:ring-0 mb-4 p-2">
                </div>
                
                <!-- Editor section -->
                <div ref="editorContainer" class="w-full">
                    <textarea 
                        name="post_body" 
                        v-model="state.post_body"
                        placeholder="Write your blog post content here..."
                        class="w-full border-0 rounded-lg bg-secondaryShade-dark focus:ring-0 resize-none p-4"
                        rows="20">
                    </textarea>
                </div>
            </form>
        </div>
    </div>
</template>