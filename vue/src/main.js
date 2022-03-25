import {
    createApp
} from 'vue'
import store from './store'
import router from './router'
import "@fortawesome/fontawesome-free/js/all"
import "bootstrap/dist/css/bootstrap.css"
import "bootstrap/dist/js/bootstrap"

import App from './App.vue'

createApp(App)
    .use(store)
    .use(router)
    .mount('#app')
