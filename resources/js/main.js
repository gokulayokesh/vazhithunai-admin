import { createApp } from 'vue';
import App from './app.vue';
import router from './router/index.js';

import '../css/style.css';
import '../css/pages/login.css';
import 'iconify-icon'


const app = createApp(App);
app.use(router);
app.mount('#app');
