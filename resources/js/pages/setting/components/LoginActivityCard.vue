<template>
    <div class="py-5 w-full transform ease-in-out duration-1000 border-b flex flex-col cursor-pointer ">
        <div class="w-full flex items-center justify-between">

            <div class="flex items-center ">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" class="text-slate-600 fill-current w-8 h-8">
                        <path d="M480.089 566Q509 566 529.5 545.411q20.5-20.588 20.5-49.5Q550 467 529.411 446.5q-20.588-20.5-49.5-20.5Q451 426 430.5 446.589q-20.5 20.588-20.5 49.5Q410 525 430.589 545.5q20.588 20.5 49.5 20.5ZM480 897q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Zm0-472Z"/>
                    </svg>
                </div>

                <div class="ml-5 flex flex-col">
                    <span v-if="session.city == null && session.country == null">
                        Unknown Location
                    </span>
                    <span v-else>{{session.city+ ', '}} {{session.country}}</span>
                    <span class="text-sm font-medium text-green-600">
                        <span v-if="current">Active now.</span>
                        <span v-else class="text-slate-600 font-semibold"> {{ session.formatedTime }}</span>
                        <span class="text-slate-600 pl-2">{{session.browser}}</span>
                    </span>
                </div>
            </div>
            
            
        </div>
        
    </div>
</template>

<script>
export default {
    data(){
        return {
            
        }
    },
    props:{
        session:Object,
        current:Boolean
    }

}
</script>

<style>

</style>