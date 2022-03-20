import { createRouter, createWebHistory } from "vue-router";


import HomeComponent from "../components/HomeComponent";
import AboutComponent from "../components/AboutComponent";

const routes = [
    {
        name: 'Home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'About',
        path: '/about/',
        component: AboutComponent
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
