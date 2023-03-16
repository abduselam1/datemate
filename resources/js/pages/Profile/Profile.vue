<template>
  <div class=" bg-gray-50 col-span-4 sm:col-span-3 w-full sm:py-5 h-screen overflow-hidden">
        <div class="relative pt-5  pb-16 px-3 border border-gray-200 sm:mt-10 mt-3 w-full xs:max-w-lg sm:max-w-xl mx-auto h-full overflow-y-scroll overflow-x-clip ">
            <div class="flex justify-center">
                <div class=" flex flex-col justify-center ">
                    <div class="sm:w-44 sm:h-44 w-32 h-32">
                        <img src="/media/profile-sample.jpg" class="h-full w-full rounded-full object-cover" alt="">
                    </div>
                    <p class="mt-5 w-full text-center text-2xl font-semibold text-light">Jane doe,<span class="text-lg font-semibold text-gray-600"> 22</span></p>
                    
                </div>
                
            </div>
            <div class="flex justify-center mt-2">
                <router-link :to="{name:'setting'}" class="px-3 py-1 rounded-full font-semibold text-light hover:bg-gray-300 border border-gray-400">
                    Edit profile
                </router-link>
            </div>
            <div class="flex w-full justify-center mt-2">
                        <badge :text="'Female'" :type="'brand2'"  />
                        <badge :text="'Age 22'" :type="'brand'"  />
            </div>
            <div class="mt-5">
                <p class="label ">Language</p>
                <div class="flex w-full mt-3 flex-wrap ">
                    <badge :text="'Amharic'" :type="'brand'"  />
                    <badge :text="'English'" :type="'brand'"  />
                    <badge :text="'Arabic'" :type="'brand'"  />
                    <badge :text="'French'" :type="'brand'"  />
                    <badge :text="'Oromiffa'" :type="'brand'"  />
                    <badge :text="'English'" :type="'brand'"  />
                    <badge :text="'English'" :type="'brand'"  />
                    <badge :text="'English'" :type="'brand'"  />
                    <badge :text="'English'" :type="'brand'"  />
                    
                    
                </div>
            </div>

            <div class="mt-5">
                <ul class="flex mx-3 justify-center ">
                    <li @click="tab = 1" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==1}">Match</li>
                    <li @click="tab = 2" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==2}">Love React</li>
                    <li @click="tab = 3" class=" px-3 mx-1 font-bold text-gray-500 font-ubuntu cursor-pointer transform ease-out duration-500 pb-2" :class="{'border-b border-brand text-gray-800 ': tab==3}">Reject</li>
                </ul>
                <div class=" grid grid-cols-2 sm:grid-cols-3 gap-1 w-full mt-10 ">
                    
                    <div class=" relative w-full bg-gray-600">
                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">
                            <div class="flex pl-1">
                                <badge :text="'Female'" :type="'brand2'" />
                            </div>
                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>
                        </div>
                        <!-- <span class=" ">Chat</span> -->
                    </div>
                    <div class=" relative w-full bg-gray-600">
                        <img src="/media/kobe-gigi.jpg" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">
                            <div class="flex pl-1">
                                <badge :text="'Male'" :type="'brand'" />
                            </div>
                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>
                        </div>
                        <!-- <span class=" ">Chat</span> -->
                    </div>
                    <div class=" relative w-full bg-gray-600">
                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">
                            <div class="flex pl-1">
                                <badge :text="'Female'" :type="'brand2'" />
                            </div>
                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>
                        </div>
                        <!-- <span class=" ">Chat</span> -->
                    </div>
                    <div class=" relative w-full bg-gray-600">
                        <img src="/media/curry.jpg" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">
                            <div class="flex pl-1">
                                <badge :text="'Male'" :type="'brand'" />
                            </div>
                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>
                        </div>
                        <!-- <span class=" ">Chat</span> -->
                    </div>
                    <div class=" relative w-full bg-gray-600">
                        <img src="/media/profile-sample.jpg" class="w-full h-full object-cover" alt="">
                        <div class="absolute top-2 left-2 w-full pr-4 flex justify-between text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5  w-5 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5   h-5  ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0  flex w-full flex-col justify-end bg-gradient-to-b from-transparent to-gray-800 left-0 h-1/4">
                            <div class="flex pl-1">
                                <badge :text="'Female'" :type="'brand2'" />
                            </div>
                            <p class=" pl-1 text-lg font-semibold text-gray-300">Jane Doe, <span class="text-base">22</span></p>
                        </div>
                        <!-- <span class=" ">Chat</span> -->
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
            
            
        </div>
    </div>
</template>

<script>
import badge from '../components/Badge.vue'

export default {
    components:{badge},
    data(){
        return {
            tab:1,
        }
    }
}
</script>

<style>

</style>