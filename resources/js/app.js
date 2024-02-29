import './bootstrap';
import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import Index from './components/Index.vue'

const app = createApp()

const router = createRouter({
    history: createWebHistory(),
    routes:[
        { path: '/', component: Index },
    ],
})

app.use(router);
app.mount('#app');