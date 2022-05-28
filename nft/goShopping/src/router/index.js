import {createRouter, createWebHistory} from 'vue-router'
import MyCv from '../views/profile/MyCv.vue'
import MyportFolio from '../views/profile/MyportFolio.vue'
import store from '../store'
import Home from '../views/portfolio/Home.vue'
import PageLayout from '../components/PageLayout.vue'
import Index from '../views/Index.vue'
import Affiliates from '../views/affiliates/Affiliates.vue'
import Faqs from '../views/affiliates/Faqs.vue'
import AuthLayout from "../components/AuthComponent/AuthLayout.vue"
import Register from "../views/AuthView/Register.vue"
import Login from "../views/AuthView/Login.vue"
import ForgotPassword from "../views/AuthView/ForgotPassword.vue"
import ResetPassword from "../views/AuthView/ResetPassword.vue"
import AboutUs from '../views/AboutUs.vue'

const routes = [
    {
        path:'/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', name: 'Index', component: Index},
            {path: '/affiliates', name: 'Affiliates', component: Affiliates},
            {path: '/affiliates/frequently-asked-questions', name: 'Faqs', component: Faqs},
            {path: '/about-us', name: 'AboutUs', component: AboutUs},
        ]
    },
    {
        path:'/Auth',
        name: 'AuthLayout',
        component: AuthLayout,
        children: [
            {path: '/login', name: 'Login', component: Login},
            {path: 'affiliate/register', name: 'AffiliateRegister', component: Register},
            {path: '/register', name: 'Register', component: Register},
            {path: 'vendor/register', name: 'VendorRegister', component: Register},
            {path: 'guest/register', name: 'GuestRegister', component: Register},
            {path: '/forgot-password', name: 'ForgotPassword', component: ForgotPassword},
            {path: '/reset-password', name: 'ResetPassword', component: ResetPassword},
        ]
    },
    {
        path:'/my-cv',
        name: 'MyCv',
        component: MyCv
    },
    {
        path:'/emmy-britt',
        name: 'MyportFolio',
        component: MyportFolio
    },
    {
        path:'/portfolio',
        name: 'Home',
        component: Home
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