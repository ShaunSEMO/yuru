<script setup>
    import axios from 'axios';
    import { reactive } from 'vue';
    import { useToast } from 'vue-toastification';

    const toast = useToast();

    const form = reactive({
        icon: 'Default',
        name: '',
    })

    const saveRecord = async () => {
        const newCategory = {
            icon: form.icon,
            category_name: form.name,
        }

        axios.post('/categories', newCategory).then(function (response) {
            toast.success('Category added successfully!', setTimeout=1000);
            console.log(response)
        }).catch(function (error) {
            console.log(error);
        });
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
                <table class="border-separate border-spacing-x-5">
                    <tr>
                        <th>
                            <button type="submit" class="bg-signYellow-default min-h-9 min-w-20 rounded-full">Save</button>
                        </th>
                        <th>
                            <button class="bg-secondaryShade-dark min-h-9 min-w-20 rounded-full">Cancel</button>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</template>