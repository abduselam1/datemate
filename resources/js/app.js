import './bootstrap';
// import VueRouter from 'vue-router'
// window.Vue = require('vue').default;
import {createApp} from 'vue'
import index from './pages/dashboard/index.vue'
import indexWithDark from './pages/dashboard/IndexWithDark.vue'
import router from './routes'
import vClickOutside from 'v-click-outside'

import steps from './pages/onboard/steps.vue'
import basic from   './pages/onboard/components/Basic.vue'
import iconLink from './pages/components/IconLink.vue'
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

var app = createApp(index).use(router)
app.mount('#app')
app.use(vClickOutside)
app.component(iconLink,'icon-link')
// app.component(basic,'basic')
// Vue.use(VueRouter);
// const router = new VueRouter({
//     routes: routes,
//     mode: 'history'
//   })

// const app = new Vue({
//     router,
//     mounted(){

//     },
//     data(){
//         return {
//             profile:'',
            
//         }
//     },
//     el: '#app',
// });