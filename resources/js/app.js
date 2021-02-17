import Vue from 'vue';
import Container from './Container';
import { routes } from './route';
import VueRouter from 'vue-router';
import { store } from './store';

const router = new VueRouter({
    routes,
    mode: 'history'
});
 
const app = new Vue({
    el: '#app',
    router: router,
    store: store,
    render: h => h(Container)
})