import {createRouter, createWebHistory} from 'vue-router'
import store from '../store'
import PageLayout from '../layouts/PageLayout.vue'
import Index from '../views/Index.vue'
import SingleProductView from '../views/SingleProductView.vue'
import SingleProductCategory from '../views/SingleProductCategory.vue'
import AllProductsCategories from '../views/AllProductsCategories.vue'
import Pricing from '../views/Pricing.vue'
import AllCategories from '../views/AllCategories.vue'
import ProfileView from '../views/ProfileView.vue'


const routes = [
    {
        path:'/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', name: 'Index', component: Index},
            {path: 'profile', props: route => ({query: route.query.user}), name: 'ProfileView', component: ProfileView},
            {path: '/pricing', name: 'Pricing', component: Pricing},
            {path: '/categories', name: 'AllCategories', component: AllCategories},
            {path: '/product-categories', name: 'AllProductsCategories', component: AllProductsCategories},
            {path: '/product/:name', name: 'SingleProductView', component: SingleProductView},
            {path: '/product-category', props: route => ({query: route.query.category}), name: 'SingleProductCategory', component: SingleProductCategory},
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