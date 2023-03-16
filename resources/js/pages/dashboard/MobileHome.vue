<template>
    
            <div class="  w-full  over h-full rounded-xl ">
                <div class="relative h-full w-full">
                    <img src="/media/kobe-gigi.jpg" class='absolute h-full w-full object-cover' alt="">
                </div>
                <div class=" bg-gradient-to-b to-gray-900 from-transparent absolute bottom-10 h-52  left-0  w-full z-10">
                    
                </div>
                <div class="absolute bottom-10  h-52 z-20  left-0  w-full overflow-scroll">
                    <div class="flex items-end px-2">
                        
                            <h3 class="text-4xl xs:text-5xl text-gray-200 font-bold font-brand">Jane Doe</h3>
                            
                        
                            <span class="font-light text-2xl xs:text-3xl font-brand text-gray-200">, 22</span>
                        
                    </div>
                    <div class="flex justify-between items-center xs:px-2 px-1 xs:my-3">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-300 xs:text-lg font-brand font-semibold ml-1"> Addis Ababa, Ethiopia</span>
                        </div>
                        <span class=" font-semibold xs:text-base text-sm text-gray-300">1KM near you</span>
    
                    </div>
                    <div class="px-2 text-white  pb-5 bg-opacity-40">
                        <p>Love to sing <br> Dont bother if you need a short term relationship I'm completly not into short term relationship <br> What happen if the text of the bio becomes more and more </p>
                    </div>
                </div>
                <div class=" absolute top-1/2 w-full -mt-10">
                    <div class="flex justify-between">

                        <!-- Reject icon -->
                        <div class="py-5 px-3 bg-white rounded-r-3xl cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>

                        <div class="py-5 px-3  bg-brand2 rounded-l-3xl cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 right-0 w-full ">
                    <div class="flex justify-end mt-2 mr-3">
                        
                        <icon-link  :count="2" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </icon-link>
                        <!-- <router-link to="/notifications" class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </router-link> -->
                        <icon-link :to="'test'" :count="'9+'" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </icon-link>
                    </div>
                </div>
            </div>
</template>

<script>
import iconLink from './../components/IconLink.vue'
export default {
    components:{iconLink},
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
</style>