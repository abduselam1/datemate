<template>
    <div class="bg-gray-100 col-span-5 sm:col-span-4 w-full sm:py-5 h-screen ">
            <app-bar title="Notifications" />
            <div class="px-3 py-5 mx-auto sm:max-w-lg w-full mt-10 bg-white rounded-xl">
                <div class="flex justify-between relative">
                    <span class="text-xl font-bold">Notifications</span>
                    <button class=" z-10 relative" @click="notificationOption = !notificationOption">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </button>
                    <div  :class="{'absolute right-0 top-0 mt-8 flex flex-col':true,'hidden': !notificationOption }">
                        <button @click="notificationOption = false" class="fixed inset-0 w-full h-full bg-gray-200 opacity-0 cursor-default"></button>
                        <div class="flex justify-end shadow-xl">
                            <svg height="12" viewBox="0 0 21 12" width="21" class="x10l6tqk xng853d xds687c shadow-2xl text-gray-100 fill-current" fill="var(--card-background)" style="transform: scale(-1, -1) translate(0px, 0px);">
                                <path d="M20.685.12c-2.229.424-4.278 1.914-6.181 3.403L5.4 10.94c-2.026 2.291-5.434.62-5.4-2.648V.12h20.684z">
                                </path>
                            </svg>
                        </div>
                        <div class="bg-gray-100 z-10 w-80 rounded-b-lg rounded-tl-lg shadow-xl px-1 py-2 ">
                            <div class="w-full hover:bg-gray-200 py-3 px-2 flex cursor-pointer rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-700">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="ml-2 font-bold text-gray-700">
                                        <span>Mark all as read</span>
                                    </div>
                                </div>
                            <div class="w-full hover:bg-gray-200 py-3 px-2 flex cursor-pointer rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="ml-3 font-bold text-gray-700">
                                    <span>Notification setting</span>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>


                <!-- filter notification -->
                <div class="mt-5">
                    <div class="flex ">
                        <div @click="activeFilter = 1" class=" transform ease-in-out duration-500 rounded-full hover:bg-gray-300 px-2 py-1 cursor-pointer font-semibold" :class="{'bg-brand/20 text-brand hover:bg-brand/20':activeFilter == 1}">All</div>
                        <div @click="activeFilter = 2" class=" transform ease-in-out duration-500 rounded-full hover:bg-gray-300 ml-3 px-2 py-1 cursor-pointer font-semibold" :class="{'bg-brand/20 text-brand hover:bg-brand/20':activeFilter == 2}">Unread</div>
                        
                    </div>
                </div>

                <div class=" mt-5">
                    <notification-card />
                </div>
            </div>
    </div>
</template>

<script>

import NotificationCard from './components/NotificationCard.vue';

export default {
    components:{NotificationCard},
    data(){
        return {
            notificationOption:false,
            activeFilter:2
        }
    }

}
</script>

<style>

</style>