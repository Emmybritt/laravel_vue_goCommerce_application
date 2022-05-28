import {createStore} from 'vuex'
import axiosClient from '../axios'

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
        sideBar: {...sidbarLinks}
    },
    getters: {},
    actions: {},
    mutations: {},
    modules: {},
});

export default store;