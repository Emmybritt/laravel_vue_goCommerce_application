import {createRouter, createWebHistory} from 'vue-router'
import PageLayout from '../layouts/page/PageLayout.vue'
import Home from '../views/Home.vue'
import store from '../store'


const routes = [
    {
        path: '/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', name: 'Home', component: Home}
        ],
    }
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