import {createRouter, createWebHistory} from 'vue-router'
import store from '../store'
import PageLayout from '../layouts/PageLayout.vue'
import Home from '../views/Home.vue'
import SingleProductView from '../views/SingleProductView.vue'
import MyCart from '../views/MyCart.vue'
import ProductCategories from '../views/ProductCategories.vue'
import NotFound from '../views/NotFound.vue'

const routes = [
    {
        path: '/:pathMatch(.*)*',
        name: 'NotFound',
        component: NotFound
    },
    {
        path: '/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', name: 'Home', component: Home},
            {path: '/cart', name: 'Cart', component: MyCart},
            {path: '/:category', name: 'ProductCategories', component: ProductCategories},
            { path: '/item', props: route => ({query: route.query.item}), name: 'SingleProductView', component: SingleProductView },
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