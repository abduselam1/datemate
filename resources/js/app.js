import './bootstrap';
// import VueRouter from 'vue-router'
// window.Vue = require('vue').default;
import {createApp} from 'vue'
// import index from './pages/dashboard/index.vue'
import AppLayout from './Layouts/AppLayout.vue'
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
import LoadingSpin from "@/Components/LoadingSpin.vue";

/* add icons to the library */
library.add(faUserSecret)

// const files = require.context('./', true, /\.vue$/i)



var app = createApp(AppLayout).use(router)
app.config.globalProperties.consts = {
    appName:"DateMate",
    purposeOptions: ['Here to Date','Open to chat','Ready for a relationship'],
    stars: ['Aries','Taurus','Gimini','Cancer','Leo','Virgo','Libra','Scorpio','Sagittarius','Capricorn','Aquarius','Pisces'],
    relationship:['Single','Taken',"It's complected",'Open'],
    yesNo: ['Yes','No','Sometimes'],
    educationLevels:['Less than 8th ,grade', 'High school', 'College diploma', 'Bachelor degree', 'Masters degree', 'PHD degree'],
    data: await callApi('init'),
    // countries: await callApi('countries'),
    // languages: await callApi('languages'),
    // religions: await callApi('religions'),
    // jobTitles: await callApi('job-titles'),
}

async function callApi(endpoint){
    var data = [];
    await axios.get('/api/v1/'+endpoint).then((result) =>{
        console.log(result.data);
        data = result.data;

    });
    
    return data;
}

async function countries(){
    var a = [];
    await axios.get('/api/v1/countries').then((result) =>{
        
        a = result.data;

    });
    console.log("=====");
    console.log(a);
    
    return a;
}

app.mount('#app')
app.use(vClickOutside)
app.component(iconLink,'iconLink')
app.component("font-awesome-icon", FontAwesomeIcon)
app.component('PopupPage',PopupPage)
app.component('switchInput',switchInput)
app.component('SwitchConstant',SwitchConstant)
app.component('AppBar',AppBar)
app.component('loading-spin',LoadingSpin)

// app.component(basic,'basic')
// Vue.use(VueRouter);
// const router = new VueRouter({
//     routes: routes,
//     mode: 'history'
//   })
