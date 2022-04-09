import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import "./plugins/chart.js"


// import "bootstrap/dist/css/bootstrap.css";
// import "bootstrap/dist/js/bootstrap.js";
// import 'bootstrap/dist/js/bootstrap.bundle';

createApp(App).use(router).mount('#app')
