<script setup>
    import { RouterView } from 'vue-router';
    import SideNav from './components/SideNav.vue';
    import { ClassicEditor, Bold, Essentials, Italic, Mention, Paragraph, Undo } from 'ckeditor5';

    const editor = ClassicEditor;
    const editorData = '<p>Hello from CKEditor 5 in Vue!</p>';
    const editorConfig = {
        plugins: [Bold, Essentials, Italic, Mention, Paragraph, Undo],
        toolbar: ['undo', 'redo', '|', 'bold', 'italic'],
        licenseKey: '<YOUR_LICENSE_KEY>',
    };
</script>

<template>
    <div id="app" class="grid grid-cols-12 min-h-screen bg-baseShade-dark">
        <div class="col-span-2 p-4 hidden md:block">
            <SideNav />
        </div>

        <div class="col-span-12 md:col-span-10 p-4">  
            <RouterView />
        </div>
    </div>
</template>
  