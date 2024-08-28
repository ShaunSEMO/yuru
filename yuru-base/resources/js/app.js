import { createApp } from 'vue';
import App from './src/App.vue';
import router from './src/router/index';
import axios from 'axios';

axios.defaults.baseURL = 'http://127.0.0.1:8000/api'; 
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const app = createApp(App);

app.use(router)

app.mount('#app');