import { createApp } from 'vue';
import NotFound from './src/NotFound.vue';
import router from './src/router';

const notFound = createApp(NotFound);

notFound.use(router)

notFound.mount('#app_notfound')