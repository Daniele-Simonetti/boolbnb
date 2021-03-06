require('./bootstrap');

window.Vue = require('vue');

import App from './views/App';
import Sponsor from './pages/Sponsor';
import Apartment from './pages/Apartment';
import Map from './pages/Map';
import Contact from './pages/Contact';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:  [
            {
                path: '/search',
                name: 'map',
                component: Map
            },
            {
                path: '/apartments/:id',
                name: 'apartment',
                props: true, 
                component: Apartment
            },
            {
                path: '/contatcs',
                name: 'contact',
                component: Contact
            },
            {
                path: '/',
                name: 'sponsor',
                component: Sponsor
            },
        ]
});

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});

