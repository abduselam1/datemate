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
import PopupPage from './pages/components/PopupPage.vue'
import switchInput from './pages/components/Switch.vue'
import SwitchConstant from './pages/components/SwitchConstant.vue';
import AppBar from './pages/components/AppBar.vue'

import iconLink from './pages/components/IconLink.vue'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from "@fortawesome/fontawesome-svg-core";
import { faPhone } from "@fortawesome/free-solid-svg-icons";

import { faUserSecret } from '@fortawesome/free-solid-svg-icons'

/* add icons to the library */
library.add(faUserSecret)

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// console.log('---');
// files.keys().map(key => console.log(key))
// console.log('-----');

var app = createApp(index).use(router)
app.mount('#app')
app.use(vClickOutside)
app.component(iconLink,'iconLink')
app.component("font-awesome-icon", FontAwesomeIcon)
app.component('PopupPage',PopupPage)
app.component('switchInput',switchInput)
app.component('SwitchConstant',SwitchConstant)
app.component('AppBar',AppBar)

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