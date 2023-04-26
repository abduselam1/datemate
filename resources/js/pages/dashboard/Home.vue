<template>
    <div class="sm:hidden bg-gray-50  col-span-5 mx-auto w-full  h-screen flex">
        <mobile-home />
    </div>
    <div class="sm:flex hidden bg-gray-50  col-span-4 mx-auto w-full py-5 h-screen">
            <div class="relative flex  max-w-3xl mx-auto shadow-2xl 2xl:h-4/5 xl:max-w-5xl 2xl:max-w-7xl  w-full over h-full rounded-xl">
                <div class="relative h-full w-3/5">
                    <img src="/media/profile-sample.jpg" class='absolute h-full w-full object-cover' alt="">
                    <div class=" bg-gradient-to-b to-gray-900 from-transparent absolute bottom-0 h-52  left-0  w-full z-10">
                        
                    </div>
                    <div class="flex justify-evenly absolute bottom-0 py-5 left-0  w-full z-10" >
                        <!-- accept button -->
                        <div class=" cursor-pointer">
                            <div class=" px-3 py-3 mb-3 rounded-full bg-brand2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <div class="px-3 py-3 mb-3 rounded-full bg-brand cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg>
                        </div>

                        <!-- regect button -->
                        <div class=" cursor-pointer">
                            
                            <div class=" px-3 py-3 mb-3 rounded-full bg-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="w-2/5 bg-white  pt-5 px-1 rounded-xl overflow-scroll">
                    <div class="flex justify-between items-center w-full">
                        <div class="flex items-baseline  justify-between px-2 ">
                            
                                <h3 class="text-3xl xs:text-4xl text-gray-600  font-bold font-brand">Jane Doe</h3>
                                
                            
                                <span class="font-light text-xl xs:text-2xl font-brand text-gray-600 ">, 22</span>
                            
                        </div>
                        <div class="px-2 rounded-lg cursor-pointer border border-gray-400 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7  h-7 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                        </div>
                    </div>
                    <div class="flex justify-between items-center xs:px-2 px-1 my-5">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-gray-600 " viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600 text-sm  font-brand font-semibold ml-0.5"> Addis Ababa, Ethiopia</span>
                        </div>
                        <span class=" font-semibold text-sm text-gray-600 ">1KM near you</span>

                    </div>
                    <div class="px-2  text-gray-600  pb-5 bg-opacity-40">
                        <h3 class="text-gray-700   text-xl font-bold">Bio</h3>
                        <p class="">Love to sing <br> Dont bother if you need a short term relationship I'm completly not into short term relationship </p>
                    </div>
                    <div class="px-2   pb-5 bg-opacity-40">
                        <h3 class="text-gray-700  text-xl font-bold">Interest</h3>
                        <div class="flex flex-wrap ">
                            <badge :text="'Laughing'" />
                            <badge :text="'Pizza'" />
                            <badge :text="'Basketball'" />
                            <badge :text="'Coding'" />
                            <badge :text="'Laughing'" />
                        </div>
                    </div>
                    <div class="px-2  text-gray-600  pb-5 bg-opacity-40">
                        <h3 class="text-gray-700  text-xl font-bold">Other info</h3>
                        <div class="flex flex-col ">
                            <div class="flex items-center">
                                <h4 class="mr-2 font-bold">Religion:</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-500">
                                    <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd" />
                                </svg>
                                
                                <span class="ml-1">Muslim</span>
                            </div>
                            <div class="flex mt-2 items-center">
                                <h4 class="mr-2 font-bold">Relationship:</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                </svg>

                                
                                <span class="ml-1">Single</span>
                            </div>

                            <div class="flex mt-2 items-center">
                                <h4 class="mr-2 font-bold">Star:</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>


                                
                                <span class="ml-1 sm:bg-transparent">Scorpio</span>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            

        </div>
</template>

<script>
import Badge from '../components/Badge.vue'
import iconLink from './../components/IconLink.vue'
import mobileHome from './MobileHome.vue'
export default {
    components:{iconLink,mobileHome,Badge},
    methods:{
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
.router-link-exact-active :hover{
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
    --tw-bg-opacity: 1;
    background-color: rgb(238 73 253 / var(--tw-bg-opacity));
}

</style>