import {createRouter, createWebHistory} from 'vue-router'
import store from '../store'
import Home from '../views/Home.vue'
import Jobs from '../views/Jobs.vue'
import PageLayout from '../Layouts/PageLayout.vue'
import SingleJobsView from '../views/SingleJobsView.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'
import ForgotPassword from '../views/ForgotPassword.vue'
import AboutUs from '../views/AboutUs.vue'
import CreateResume from '../views/CreateResume.vue'
import PostAJob from '../views/PostAJob.vue'


const routes = [
    {
        path:'/',
        name: 'PageLayout',
        component: PageLayout,
        children: [
            {path: '/', name: 'Home', component: Home},
            {path: '/login', name: 'Login', component: Login},
            {path: '/post-job', name: 'PostAJob', component: PostAJob},
            {path: '/create-resume', name: 'CreateResume', component: CreateResume},
            {path: '/forgot-password', name: 'ForgotPassword', component: ForgotPassword},
            {path: '/register', name: 'Register', component: Register},
            {path: '/jobs', name: 'Jobs', component: Jobs},
            {path: '/about-us', name: 'AboutUs', component: AboutUs},
            {path: '/job', props: route => ({query: route.query.title}), name: 'SingleJobsView', component: SingleJobsView},
        ]
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