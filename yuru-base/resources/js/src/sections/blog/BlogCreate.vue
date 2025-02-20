<script setup>
    import { RouterView } from 'vue-router';
    import { ref, onMounted } from 'vue';
    import Quill from 'quill';
    import 'quill/dist/quill.snow.css'; // Make sure you import Quill's CSS

    const editorContainer = ref(null); // Create a ref for the editor

    onMounted(() => {
        if (editorContainer.value) {
            new Quill(editorContainer.value, {
                theme: 'snow' // 'snow' is the default theme, you can use 'bubble' too
            });
        }
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

        <div class="bg-primaryShade-dark rounded-3xl p-10">
            <form>
                <div class="grid grid-rows-3 grid-flow-col gap-4">
                    <div class="row-span-3">
                        <input type="text" name="title" class="border-0 rounded-full bg-secondaryShade-dark text-primaryShade-dark placeholder:text-primaryShade-dark min-h-10 focus:ring-0">
                        <br><br>
                        <select id="category" name="category" class="block min-h-10 rounded-full bg-secondaryShade-dark text-primaryShade-dark">
                            <option>Technical</option>
                            <option>Commentary</option>
                            <option>Tutorial</option>
                        </select>
                    </div>
                    <div class="row-span-3">
                        <div ref="editorContainer">
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>