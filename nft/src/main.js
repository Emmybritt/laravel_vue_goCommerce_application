import { createApp } from 'vue'
import App from './App.vue'
import './index.css'
import router from "./router";
import store from "./store";
// import Meta from "vue-meta";
import './assets/line-awesome/css/line-awesome.min.css'

createApp(App).use(store).use(router).mount("#app");
