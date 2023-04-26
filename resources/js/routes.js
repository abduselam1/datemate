import { createRouter, createWebHistory } from 'vue-router';
import home from './pages/dashboard/Home.vue'
import login from './pages/auth/Login.vue'
import register from './pages/auth/Register.vue'
import forgot from './pages/auth/ForgotPassword.vue'
import change from './pages/auth/components/NewPassword.vue'
import onboard from './pages/onboard/Onboard.vue'
import wizard from './pages/onboard/components/wizard.vue'
import wizard2 from './pages/onboard/components/wizard2.vue'
import setting from './pages/setting/Setting.vue'
import profile from './pages/Profile/Profile.vue'
import message from './pages/message/Message.vue'
import notification from './pages/notification/Notification.vue'
import swipe from './pages/dashboard/swipe.vue'

const routes = [
    {
        path: '/',
        name:"home",
        component: home,
        meta: {
          title: 'Home Page - Dating',
          metaTags: [
            {
              name: 'description',
              content: 'Handmed is the best way to connect to real professional doctors and pyschatrist to get the correct information and also to communicate with them.'
            },
            {
              property: 'og:description',
              content: 'Handmed is the best way to connect to real professional doctors and pyschatrist to get the correct information and also to communicate with them.'
            }
          ]
        }
      },
      {
        path: '/login',
        name:"login",
        component: login,
      },
      {
        path: '/register',
        name:"register",
        component: register
      },
      {
        path: '/forgot-password',
        name:"forgot-password",
        component: change
      },
      {
        path: '/onboard',
        name:"onboard",
        component: wizard
      },
      {
        path: '/setting',
        name:"setting",
        component: setting
      },
      {
        path: '/message',
        name:"message",
        component: message
      },
      {
        path: '/profile',
        name:"profile",
        component: profile
      },
      {
        path:'/notifications',
        name:'notification',
        component:notification
      },
      
      
      
    //   {
    //     path: '/profile',
    //     name:"profile",
    //     component: require('./components/pages/profile.vue').default
    //   },
    //   {
    //     path:'/account/:username',
    //     name:"account",
    //     component: require('./components/pages/account.vue').default,
    //     meta: {
    //       title: 'username - Handmed',
    //       metaTags: [
    //         {
    //           name: 'description',
    //           content: ''
    //         },
    //         {
    //           property: 'og:description',
    //           content:''
    //         }
    //       ],
    //       data:null
    //     },


    //   },
     
]

const router = createRouter({
	history: createWebHistory(),
	routes
})

export default router