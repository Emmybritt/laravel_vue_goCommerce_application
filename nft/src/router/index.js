import {createRouter, createWebHistory} from 'vue-router'
import store from '../store'
import PageLayout from '../layouts/PageLayout.vue'
import Home from '../views/Home.vue'

const routes = [
    {
        path:'/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', component: Home, name: 'Home'}
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.sate.user.token) {
        next({name: 'Login'});
    }else if(store.state.user.token && to.meta.isGuest){
        next({name: 'Dashboard'});
    }else{
        next();
    }
});

export default router