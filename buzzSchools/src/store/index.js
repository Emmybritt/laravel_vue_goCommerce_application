import {createStore} from 'vuex'
import axiosClient from '../axios'

const courseCategories = [
    {
        id: 1,
        icon: 'image',
        title: 'Business',
        courses: 5
    },
    {
        id: 2,
        icon: 'image',
        title: 'Marketing',
        courses: 16
    },
    {
        id: 3,
        icon: 'image',
        title: 'Photography',
        courses: 12
    },
    {
        id: 4,
        icon: 'image',
        title: 'Designs',
        courses: 56
    },
    {
        id: 5,
        icon: 'image',
        title: 'Mathematics',
        courses: 8
    },
    {
        id: 6,
        icon: 'las la-laptop',
        title: 'Programming',
        courses: 109
    },
    {
        id: 7,
        icon: 'image',
        title: 'NFT',
        courses: 22
    },
    {
        id: 8,
        icon: 'image',
        title: 'Development',
        courses: 6
    },
];

const popularCourses = [
    {
        id: 1,
        title: 'How to build a professional CV',
        description: 'Learn how to develope a professional CV.',
        amount: 15.00,
        normalAmount: 24.00,
        curency: 'USD',
        image: 'studentwithbook.png',
        rating: 6,
        saved: true,
        duration: '15 hrs 30 min',
        lessons: 156,
        level: 'intermediate'
    },
    {
        id: 2,
        title: 'PHP beginner: Become a PHP master',
        description: 'Learn php fundamentals and understand how to work with php.',
        amount: 'free',
        normalAmount: 24.00,
        curency: 'USD',
        image: 'womanlookin.png',
        rating: 4,
        saved: false,
        duration: '45 mins',
        lessons: 78,
        level: 'beginner'
    },
    {
        id: 3,
        title: 'Vue 3 composition api',
        description: 'Learn about vue js application and how to create your website with vue js.',
        amount: 20,
        normalAmount: 8.00,
        curency: 'USD',
        image: 'threestudent.png',
        rating: 6,
        saved: false,
        duration: '4 hrs',
        lessons: 26,
        level: 'intermediate'
    },
    {
        id: 4,
        title: 'Nutrition: Build perfect diet and meal plan',
        description: 'Learn about the best perfect diet and how to build a perfect diet and meal.',
        amount: 30,
        normalAmount: 16.00,
        curency: 'USD',
        image: 'girlwithbook.png',
        rating: 3,
        saved: false,
        duration: '8 hrs',
        lessons: 106,
        level: 'advance'
    },
    {
        id: 5,
        title: 'The creator of maniscrest',
        description: 'Learn about the creator of manicrest for some main purpose.',
        amount: 45.00,
        normalAmount: 50.00,
        curency: 'USD',
        image: 'about-students.png',
        rating: 5,
        saved: false,
        duration: '2 hrs',
        lessons: 36,
        level: 'intermediate'
    },
    {
        id: 6,
        title: 'How to grow your businness in 2022',
        description: 'Learn how to grow your businness in 2022, and understand the fundametals of how businness works.',
        amount: 15.00,
        normalAmount: 43.00,
        curency: 'USD',
        image: 'threestudent.png',
        rating: 6,
        saved: false,
        duration: '9 hrs',
        lessons: 226,
        level: 'beginner'
    },
]

const sidbarLinks = [
    {
        title: 'Dashboard',
        icon: 'dashboard',
        path: {name: 'Dashboard'} 
    },
    {
        title: 'User Management',
        icon: 'person',
        path: {name: 'UserManagement'},
        gate: 'user_management_access',
        children: [
            {
                title: 'Permission',
                icon: 'perm_data_setting',
                path: {name: 'Permission'},
                gate: 'permission_access',
            },
            {
                title: 'Roles',
                icon: 'group',
                path: {name: 'Roles'},
                gate: 'role_access',

            },
            {
                title: 'Users',
                icon: 'users',
                path: {name: 'Users'},
                gate: 'user_access',

            }
        ],
    }
];
const store = createStore({
    state: {
        user: {
            data: null,
            token: localStorage.getItem("TOKEN"),
            type: null,
        },
        cart: {
            savedItem: [
                {
                    productId: localStorage.getItem('id')
                }
            ],
        },
        sideBar: [...sidbarLinks],
        CourseCategories: [...courseCategories],
        popularCourses: [...popularCourses],
    },
    getters: {},
    actions: {
        
    },
    mutations: {
       setSavedItemTotrue (state, id) {
        let course = state.popularCourses.filter(cours => cours.id == id);
        course.map((sav) => sav.saved = !sav.saved);
            
       },
       setCartItem (state, itemId) {
        
        
       }
    },
    modules: {},
});

export default store;