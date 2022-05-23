import {createStore} from 'vuex'
import axiosClient from '../axios'


const store = createStore({
    state: {
        user: {
            data: null,
            token: localStorage.getItem("TOKEN"),
            type: null,
        },
    },
    getters: {},
    actions: {},
    mutations: {},
    modules: {},
});

export default store;