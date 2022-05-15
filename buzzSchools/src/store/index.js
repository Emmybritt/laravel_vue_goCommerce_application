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
        icon: 'image',
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
        sideBar: [...sidbarLinks],
        CourseCategories: [...courseCategories]
    },
    getters: {},
    actions: {},
    mutations: {},
    modules: {},
});

export default store;