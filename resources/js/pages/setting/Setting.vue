<template>
    <app-bar title="Setting" />
    <div class=" bg-gray-50 col-span-5 sm:col-span-4 w-full mt-10 sm:mt-0 sm:py-5 h-screen">
        <!-- <div class="sm:hidden z-20 px-3 py-2 bg-gray-50 items-center flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-3 text-lg text-slate-700">Setting</span>
        </div> -->
        <div class="  rounded-xl pb-5 relative sm:mt-16  h-full  sm:max-w-xl  md:max-w-2xl xl:max-w-3xl mx-auto overflow-hidden ">
            <div class=" absolutes sticky top-0 pt-5 bg-gray-100 left-0 w-full rounded-t-xl  border-y truncate border-gray-300 ">
                <ul class=" flex justify-evenly -mb-px text-gray-400 overflow-scroll font-semibold">
                    <li @click="changeTab(1)" :class="{'border-b-3 text-gray-600 border-brand':active == 1}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Edit profile</li>
                    <li @click="changeTab(2)" :class="{'border-b-3 text-gray-600 border-brand':active == 2}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Change password</li>
                    <li @click="changeTab(3)" :class="{'border-b-3 text-gray-600 border-brand':active == 3}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3 ">Subscription</li>
                    <!-- <li @click="changeTab(4)" :class="{'border-b-3 text-gray-600 border-brand':active == 4}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Notifications</li> -->
                    <!-- <li @click="changeTab(5)" :class="{'border-b-3 text-gray-600 border-brand':active == 5}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Privacy and Security</li> -->
                    <li @click="changeTab(6)" :class="{ 'border-b-3 text-gray-600 border-brand': active == 6 }" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Login activity</li>
                    <!-- <li @click="changeTab(7)" :class="{ 'border-b-3 text-gray-600 border-brand': active == 7 }" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Others</li> -->
                    
                    <!-- <li @click="changeTab(7)" :class="{'border-b-3 border-brand':active == 7}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Privacy and Security</li>
                    <li @click="changeTab(8)" :class="{'border-b-3 border-brand':active == 8}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Security</li> -->
                </ul>
            </div>
            <div class=" pb-24   sm:px-0 overflow-scroll h-full ">
                <div v-show="active == 1">
                    <profile />
                </div>
                <div v-show="active == 2">
                    <change-password />
                </div>
                <div v-show="active == 3">
                    <subscription />
                </div>
                <!-- <div v-show="active == 4">
                    <notification-setting :setting="setting" />
                </div> -->

                <div v-show="active ==5">
                    <privacy-and-security :setting="setting" />
                </div>

                <div v-show="active == 6">
                    <login-activity />
                </div>
                
                
            </div>
            
            
        </div>
    </div>
    <!-- <div class=" fixed py-3 px-2 items-center text-light font-semibold top-0 left-0 w-full flex xs:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span class="pl-5 text-lg">Setting</span>
    </div> -->
</template>

<script>
import iconLink from './../components/IconLink.vue'
import ChangePassword from './components/ChangePassword.vue'
import profile from './components/EditProfile.vue'
import LoginActivity from './components/LoginActivity.vue'
import NotificationSetting from './components/NotificationSetting.vue'
import Subscription from './components/Subscription.vue'
import PrivacyAndSecurity from './components/PrivacyAndSecurity.vue'
import appBar from '../components/AppBar.vue'

export default {
    components:{
        iconLink,
        ChangePassword,
        profile,
        LoginActivity,
        NotificationSetting,
        Subscription,
        PrivacyAndSecurity,
        appBar
    },

    // mounted() {
    //     axios.get('/api/v1/settings').then((result) => {
    //         if(result.status == 200){
    //             this.setting = result.data
    //         }
    //     }).catch((err) => {
            
    //     });
    // },

    
    data(){
        return {
            active:1,
            setting:[]
        }
    },
    methods:{
        changeTab(tab){
            // console.log(this.$parent);
            console.log(this.user);
            this.active = tab
        }
    }

}
</script>

<style>
.router-link-exact-active{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
    --tw-bg-opacity: 1;
    background-color: rgb(238 73 253 / var(--tw-bg-opacity));
}
</style>