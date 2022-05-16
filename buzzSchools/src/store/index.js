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
        title: 'Nutrition: Build perfect diet and meal plan',
        amount: 15.00,
        normalAmount: 24.00,
        curency: 'USD',
        image: 'studentwithbook.png',
        rating: 6,
        saved: true,
    },
    {
        id: 2,
        title: 'PHP beginner: Become a PHP master',
        amount: 'free',
        normalAmount: 24.00,
        curency: 'USD',
        image: 'womanlookin.png',
        rating: 4,
        saved: false,
    },
    {
        id: 3,
        title: 'Nutrition: Build perfect diet and meal plan',
        amount: 20,
        normalAmount: 8.00,
        curency: 'USD',
        image: 'threestudent.png',
        rating: 6,
        saved: false,
    },
    {
        id: 4,
        title: 'Nutrition: Build perfect diet and meal plan',
        amount: 30,
        normalAmount: 16.00,
        curency: 'USD',
        image: 'girlwithbook.png',
        rating: 3,
        saved: false,
    },
    {
        id: 5,
        title: 'The creator of maniscrest',
        amount: 45.00,
        normalAmount: 50.00,
        curency: 'USD',
        image: 'about-students.png',
        rating: 5,
        saved: false,
    },
    {
        id: 6,
        title: 'How to grow your businness in 2022',
        amount: 15.00,
        normalAmount: 43.00,
        curency: 'USD',
        image: 'threestudent.png',
        rating: 6,
        saved: false,
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
            itemId: localStorage.getItem('ID'),
            count: localStorage.getItem('COUNT'),
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