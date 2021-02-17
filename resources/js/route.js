import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from './pages/Login';
import Quote from './pages/Quote';

Vue.use(VueRouter);

export const routes = [
    {
        path: '/',
        component: Login
    },
    {
        path: '/quote',
        component: Quote
    }
];