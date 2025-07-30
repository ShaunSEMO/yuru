<script setup>
    import axios from 'axios';
    import { reactive, onMounted } from 'vue';
    import { RouterLink, useRoute, useRouter } from 'vue-router';
    import { useToast } from 'vue-toastification';

    const toast = useToast();
    const route = useRoute();
    const router = useRouter();
    const id = route.params.id

    const form = reactive({
        icon: 'Default',
        name: 'Def',
    })


    onMounted(async () => {
        try {
            const response = await axios.get(`/category/${id}`);
            form.name = response.data.category_name
            form.icon = response.data.icon
        } catch (error) {
            toast.error('This is the error ' + error, 1000);
            console.log(error)
        };
    });

    const deleteCategory = async () => {
        try {
            await axios.delete(`/category/${id}`)
            await router.push({ name: 'Categories' })
            await toast.warning('Category deleted!', 1000)
        } catch (error) {
            toast.error('This is the DELETE error' + error, 1000);
            console.log(error)
        }
    }

    const saveRecord = async () => {
        const newCategory = {
            icon: form.icon,
            category_name: form.name,
        }

        try {
            await axios.put(`/category/${id}`, newCategory)
            toast.success('Category updated successfully!', setTimeout=1000)

        } catch (error) {
            toast.error('This is the UPDATE error ' + error, 1000);
            console.log(error);
        }

    }

</script>

<template>
    <div class="container mx-auto p-6">
        <div class="bg-primaryShade-dark rounded-3xl p-10 pb-15">
            <form @submit.prevent="saveRecord">
                <div class="grid grid-rows-3 grid-flow-col gap-4"> 
                    <div class="row-span-3">
                        <h2 class="text-2xl">Name</h2>
                        <br>
                        <input 
                            v-model="form.name" 
                            type="text" 
                            name="title" 
                            class="border-0 rounded-full bg-secondaryShade-dark min-h-10 focus:ring-0 p-3"
                            required>
                    </div>
                </div>
                <br>
                <br>
                <table>
                    <tr>
                        <th>
                            <button type="submit" class="bg-signYellow-default min-h-9 min-w-20 rounded-full">Save</button>
                        </th>
                        <th>
                            <button class="bg-secondaryShade-dark min-h-9 min-w-20 rounded-full">
                                <RouterLink to="/blog/categories">Cancel</RouterLink>
                            </button>
                        </th>
                        <th>
                            <button type="button" @click="deleteCategory" class="bg-red-400 min-h-9 min-w-20 rounded-full">Delete</button>
                        </th>
                    </tr>
                </table>
            </form>
            <br>
            <!-- <button class="bg-secondaryShade-dark min-h-9 min-w-20 rounded-full">
                <RouterLink to="/blog/categories">Cancel</RouterLink>
            </button> -->
        </div>  
    </div>
</template>