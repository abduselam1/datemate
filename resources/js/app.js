import './bootstrap';
// import VueRouter from 'vue-router'
// window.Vue = require('vue').default;
import {createApp} from 'vue'
// import index from './pages/dashboard/index.vue'
import AppLayout from './Layouts/AppLayout.vue'
import indexWithDark from './pages/dashboard/IndexWithDark.vue'
import router from './routes'
import vClickOutside from 'v-click-outside'


import iconLink from './pages/components/IconLink.vue'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from "@fortawesome/fontawesome-svg-core";
// import { faPhone } from "@fortawesome/free-solid-svg-icons";

import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import LoadingSpin from "@/Components/LoadingSpin.vue";
// import loadingStore from './loadingStore';

/* add icons to the library */
library.add(faUserSecret)

// const files = require.context('./', true, /\.vue$/i)

// router.beforeEach((to, from, next) => {
//   // Set the loading state to true
//   loadingStore.isLoading = true;

//   // Proceed with the navigation
//   next();
// });

// router.afterEach(() => {
//   // Set the loading state to false after the navigation is complete
//   loadingStore.isLoading = false;
// });

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
app.config.globalProperties.user = await callApi('user')
app.config.globalProperties.changeUserValue = (newValue) => {
  app.config.globalProperties.user = newValue;
};

async function callApi(endpoint){
    var data = [];
    try {

        var result = await axios.get('/api/v1/'+endpoint)
        data = result.data.data ?? result.data
        return data;
    } catch (error) {
        return data;
    }

}

app.mount('#app')
app.use(vClickOutside)
app.component(iconLink,'iconLink')
app.component("font-awesome-icon", FontAwesomeIcon)
// app.component('PopupPage',PopupPage)
// app.component('switchInput',switchInput)
// app.component('switchConstant',SwitchConstant)
// app.component('AppBar',AppBar)
app.component('loading-spin',LoadingSpin)

// app.component(basic,'basic')
// Vue.use(VueRouter);
// const router = new VueRouter({
//     routes: routes,
//     mode: 'history'
//   })
// export {changeUserValue}