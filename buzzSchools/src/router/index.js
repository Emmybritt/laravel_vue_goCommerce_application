import {createRouter, createWebHistory} from 'vue-router'
import PageLayout from '../layouts/page/PageLayout.vue'
import Home from '../views/Home.vue'
import store from '../store'
import AuthLayout from '../layouts/auth/AuthLayout.vue'
import Register from '../views/AuthView/Register.vue'
import Login from '../views/AuthView/Login.vue'
import ForgotPassword from '../views/AuthView/ForgotPassword.vue'
import About from '../views/About.vue'
import AllCourses from '../views/courses/AllCourses.vue'
import CourseCategory from '../views/courses/CourseCategory.vue'
import SingleCourseView from '../views/courses/SingleCourseView.vue'
import Webinars from '../views/webinars/Webinars.vue'
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
            {path: '/about', name: 'About', component: About},
            {path: '/courses', name: 'AllCourses', component: AllCourses},
            {path: '/course-categories', name: 'CourseCategory', component: CourseCategory},
            { path: '/single-course', props: route => ({query: route.query.title}), name: 'SingleCourseView', component: SingleCourseView },
            {path: '/webinars', name: 'Webinars', component: Webinars},
        ],
    },
    {
        path: '/login',
        name: 'AuthLayout',
        component: AuthLayout,
        children: [
            {path: '/login', name: 'Login', component: Login},
            {path: '/register', name: 'Register', component: Register},
            {path: '/forgot-password', name: 'ForgotPassword', component: ForgotPassword},
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