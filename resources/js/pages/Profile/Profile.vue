<template class="">
    <app-bar title="Profile" />
    <!-- <div v-if="profile == null || profile == undefined"  class=" bg-gray-200   h-screen w-full flex flex-col justify-center">
        <div class="w-full flex justify-center ">
            <img src="/media/loaders/loader.gif" class="w-10 h-10" alt="">
        </div>
    </div> -->
  <div v-if="user" v-cloak class=" bg-gray-50 col-span-5 sm:col-span-4 w-full sm:mt-0 mt-7 sm:pt-5 h-screen overflow-hidden flex">
        <div class="relative pt-5  pb-10 px-3 border-r border-y  border-gray-200 w-full sm:w-3/5  h-full overflow-y-scroll overflow-x-clip ">


            <!-- Profile photo lists -->
            <profile-picture :profile-pictures="user.pictures" />
            <!-- Name and age -->

            <name :profile="user" />

            <div class="border-b pb-7 my-6">
                <span class="text-lg font-extrabold text-gray-800"> Profile completion</span>

                <div class="mt-2 h-4 rounded-full w-full bg-gray-300  ">
                    <div class="w-1/2 bg-brand h-full flex flex-col items-center justify-center text-xs rounded-full text-center text-gray-100 font-semibold">55%</div>
                </div>
            </div>


<!--            Language-part-->
            <language :all-languages="user.languages" />


<!--            Purpose part-->
            <purpose :prps="user['purpose']" />

            <!-- Interest part -->

            <interest :interests="user['interests']" />

<!--            Educationa and work -->

            <education-and-work @aads="updateData" :data="user['education_and_work']" />

<!--            personal Info section-->
            <info @data-updated="updateData" :info="user" />

<!--            <preference />-->




<!--            <div class="mt-5">-->
<!--                <ul class="flex mx-3 justify-center ">-->
<!--                    <li @click="tab = 1" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==1}">Match</li>-->
<!--                    <li @click="tab = 2" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==2}">Love React</li>-->
<!--                    <li @click="tab = 3" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==3}">Reject</li>-->
<!--                </ul>-->
<!--                <div class=" grid grid-cols-2 sm:grid-cols-3 gap-1 w-full mt-10 ">-->

<!--                    <div class=" relative w-full bg-gray-600">-->
<!--                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">-->
<!--                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">-->
<!--                            <div class="flex pl-1">-->
<!--                                <badge :text="'Female'" :type="'brand2'" />-->
<!--                            </div>-->
<!--                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>-->
<!--                        </div>-->
<!--                        &lt;!&ndash; <span class=" ">Chat</span> &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=" relative w-full bg-gray-600">-->
<!--                        <img src="/media/kobe-gigi.jpg" class="w-full h-full object-cover" alt="">-->
<!--                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">-->
<!--                            <div class="flex pl-1">-->
<!--                                <badge :text="'Male'" :type="'brand'" />-->
<!--                            </div>-->
<!--                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>-->
<!--                        </div>-->
<!--                        &lt;!&ndash; <span class=" ">Chat</span> &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=" relative w-full bg-gray-600">-->
<!--                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">-->
<!--                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">-->
<!--                            <div class="flex pl-1">-->
<!--                                <badge :text="'Female'" :type="'brand2'" />-->
<!--                            </div>-->
<!--                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>-->
<!--                        </div>-->
<!--                        &lt;!&ndash; <span class=" ">Chat</span> &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=" relative w-full bg-gray-600">-->
<!--                        <img src="/media/curry.jpg" class="w-full h-full object-cover" alt="">-->
<!--                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">-->
<!--                            <div class="flex pl-1">-->
<!--                                <badge :text="'Male'" :type="'brand'" />-->
<!--                            </div>-->
<!--                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>-->
<!--                        </div>-->
<!--                        &lt;!&ndash; <span class=" ">Chat</span> &ndash;&gt;-->
<!--                    </div>-->
<!--                    <div class=" relative w-full bg-gray-600">-->
<!--                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">-->
<!--                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />-->
<!--                            </svg>-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">-->
<!--                            <div class="flex pl-1">-->
<!--                                <badge :text="'Female'" :type="'brand2'" />-->
<!--                            </div>-->
<!--                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>-->
<!--                        </div>-->
<!--                        &lt;!&ndash; <span class=" ">Chat</span> &ndash;&gt;-->
<!--                    </div>-->






<!--                </div>-->
<!--            </div>-->

            <div class=" border-t pt-5 mt-5 flex justify-center">
                <div class="flex flex-col items-center justify-center">
                    <ul class="text-gray-800 flex">
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="#">Help</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="#" >About</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="#" >Contact</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="#" >Manage cookies</router-link>
                        </li>

                    </ul>
                    <div class="mt-2 text-gray-500 text-sm">
                        <span>{{year}} &copy; Datemate</span>
                    </div>
                </div>

            </div>


        </div>
            <div class="sm:block hidden w-1/4 bg-gray-200">
            </div>
        </div>
</template>

<script>
import badge from '../components/Badge.vue'
import axios from "axios";
import LoadingSpin from "@/Components/LoadingSpin.vue";
import Alert from "@/Components/alerts/Alert.vue";
import ProfilePicture from "@/pages/Profile/components/ProfilePicture.vue";
import Name from "@/pages/Profile/components/Name.vue";
import Language from "@/pages/Profile/components/Language.vue";
import Purpose from "@/pages/Profile/components/purpose.vue";
import Interest from "@/pages/Profile/components/Interest.vue";
import EducationAndWork from "@/pages/Profile/components/EducationAndWork.vue";
import Info from "@/pages/Profile/components/Info.vue";
import Preference from "@/pages/Profile/components/Preference.vue";
import appBar from '../components/AppBar.vue'

export default {
    components:{Preference, Info, EducationAndWork, Interest,Purpose, Language, Name, Alert, LoadingSpin, badge,ProfilePicture, appBar },
        // mixins: [AlertMixin],
    data(){
        return {
            tab:1,
            year: null,
            profile: null,


        }
    },
    created(){
        
        const d = new Date();
        this.year = d.getFullYear();
    },

    methods:{

        changeI(){
            this.state.modalText  = 'asdf'
        },
        showError(){

        },

        updateData(data){
            this.user = data;
        }

    }
}
</script>

<style>

</style>
