<template>
    <div class=" bg-gray-50 col-span-4 sm:col-span-3 w-full sm:py-5 h-screen overflow-hidden">
        <div class="relative sm:mt-20 mt-3  sm:max-w-xl md:max-w-2xl mx-auto h-full overflow-y-scroll overflow-x-clip ">
            <div class=" absolutes z-10 sticky top-0 bg-gray-50 left-0 w-full  border-b truncate border-gray-300 ">
                <ul class=" flex -mb-px z-20 text-gray-500 overflow-scroll font-semibold">
                    <li @click="changeTab(1)" :class="{'border-b-3 border-brand':active == 1}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Edit profile</li>
                    <li @click="changeTab(2)" :class="{'border-b-3 border-brand':active == 2}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Change password</li>
                    <li @click="changeTab(3)" :class="{'border-b-3 border-brand':active == 3}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3 ">Subscription</li>
                    <li @click="changeTab(4)" :class="{'border-b-3 border-brand':active == 4}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Security</li>
                    <li @click="changeTab(5)" :class="{'border-b-3 border-brand':active == 5}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Privacy and Security</li>
                    <li @click="changeTab(6)" :class="{'border-b-3 border-brand':active == 6}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Security</li>
                    <li @click="changeTab(7)" :class="{'border-b-3 border-brand':active == 7}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Privacy and Security</li>
                    <li @click="changeTab(8)" :class="{'border-b-3 border-brand':active == 8}" class="transform ease-out mx-3 text-sm cursor-pointer fonts-semibold pb-3">Security</li>
                </ul>
            </div>
            <div class=" pb-16 px-3 sm:px-0 pt-3">
                <div v-show="active == 1">
                    <profile />
                </div>
                <div v-show="active == 2">
                    <change-password />
                </div>
                <div v-show="active == 3">
                    <profile />
                </div>
                <div v-show="active == 4">
                    <profile />
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

export default {
    components:{iconLink,ChangePassword,profile},
    data(){
        return {
            active:1
        }
    },
    methods:{
        changeTab(tab){
            console.log(tab);
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