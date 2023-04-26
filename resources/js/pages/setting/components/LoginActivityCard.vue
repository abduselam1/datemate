<template>
    <div class="py-5 w-full transform ease-in-out duration-1000 border-b flex flex-col cursor-pointer " @click="isOpen = !isOpen">
        <div class="w-full flex items-center justify-between">

            <div class="flex items-center ">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" class="text-slate-600 fill-current w-8 h-8">
                        <path d="M480.089 566Q509 566 529.5 545.411q20.5-20.588 20.5-49.5Q550 467 529.411 446.5q-20.588-20.5-49.5-20.5Q451 426 430.5 446.589q-20.5 20.588-20.5 49.5Q410 525 430.589 545.5q20.588 20.5 49.5 20.5ZM480 897q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Zm0-472Z"/>
                    </svg>
                </div>

                <div class="ml-5 flex flex-col">
                    <span>Addis Ababa, Ethiopia</span>
                    <span class="text-sm font-medium text-green-600">Active now.<span class="text-slate-600 pl-2">Samsung M13</span></span>
                </div>
            </div>
            
            <div  class=" cursor-pointer text-slate-700 transform ease-out duration-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" :class="{'hidden':isOpen}" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" :class="{'hidden':!isOpen}" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

            </div>
        </div>
        <div class="mt-5 w-full flex justify-center transform ease-in-out duration-700" :class="{'hidden':!isOpen}">
            <button @click="console.log('asd')" class="py-3 cursor-pointer px-20 bg-red-500 text-slate-200 text-lg rounded-full text-center">Terminate</button>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            isOpen:false
        }
    }

}
</script>

<style>

</style>