// require('./bootstrap');
//
// import Alpine from 'alpinejs';
//
// window.Alpine = Alpine;
//
// Alpine.start();

require('./bootstrap');
import 'bootstrap/dist/css/bootstrap.css'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router';
export default{
    router: router

    //and rest of the code
    //...
}
createApp(App).use(router).mount('#app');
import 'bootstrap/dist/js/bootstrap.js'
