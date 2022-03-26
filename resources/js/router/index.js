import { createRouter, createWebHistory } from "vue-router";


import AboutComponent from "../components/AboutComponent";
import Home from "../views/Home";

const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    {
        name: 'About',
        path: '/about',
        component: AboutComponent
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
