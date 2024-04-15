import './bootstrap';
import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import Index from './components/Index.vue'
import VerifyEmail from './components/VerifyEmail.vue'
import User from './components/User.vue'
import 'preline';

const app = createApp()

const router = createRouter({
    history: createWebHistory(),
    routes:[
        { path: '/', name: 'home', component: Index },
        { path: '/verify-email', name: 'verify-email', component: VerifyEmail },
        { path: '/smarthire/user', name: 'user', component: User },
    ],
})

app.use(router);
app.mount('#app');