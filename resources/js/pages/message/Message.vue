<template>
    <div class="dark:bg-black/90 bg-gray-50  col-span-5 sm:col-span-4 w-full md:pt-5 h-screen overflow-hidden">
        <div class="relative w-full h-full overflow-y-scroll">
            <div class="absolute top-0 left-auto mx-auto  pb-4  h-full w-full">
                <div class="grid grid-cols-5 sm:max-w-2xl md:max-w-2xl xl:max-w-4xl h-full mx-auto border rounded dark:bg-black border-gray-300 dark:border-gray-600">
                    <div :class="{'col-span-5  sm:col-span-2':!messageSelected,'hidden sm:block col-span-2':messageSelected}" class=" overflow-y-auto overflow-x-hidden w-full col-span-5 sm:col-span-2 border-r border-gray-200 dark:border-gray-600">
                        <div class="sticky dark:bg-black bg-gray-50 top-0 py-4 px-2 border-b border-gray-300 dark:border-gray-600  flex justify-between items-center">
                            <router-link to="/" class="block sm:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 dark:text-gray-300 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </router-link>
                            <div class="w-full text-center">
                                <h3 class=" text-gray-800 dark:text-gray-300 font-semibold text-lg">Message Room</h3>
                            </div>
                            
                        </div>
                        <div class="pb-10 sm:pb-0">
                            <!-- messages list -->
                            <div class="flex items-center justify-start py-2 w-full  mt-1 px-1 cursor-pointer hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 ">
                                <!-- profile image of each message room -->
                                <div class="flex-none h-12 w-12 mr-2 rounded-full overflow-hidden">
                                    <img src="/media/curry.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <!-- name -->
                                <div class="w-full overflow-hidden">
                                    <div class="flex justify-between">
                                        <h4 class=" text-sm text-gray-800 dark:text-gray-300 font-bold">Abduselam</h4>
                                        <span class=" text-xs text-gray-700 dark:text-gray-400 ">2 hours ago</span>
                                    </div>
                                    <div class=" truncate text-sm text-gray-700 dark:text-gray-400 ">
                                        <span class="">last sent adaf adfjf adjfasdkff adfjfa adfd fsd asddjd djffj djdj ddk</span>
                                    </div>
                                </div>
                                
                            </div>

                            

                            <div class="flex items-center justify-start py-2 w-full  mt-1 px-1 cursor-pointer hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 ">
                                <!-- profile image of each message room -->
                                <div class="flex-none h-12 w-12 mr-2 rounded-full overflow-hidden">
                                    <img src="/media/kobe-gigi.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <!-- name -->
                                <div class="w-full overflow-hidden">
                                    <div class="flex justify-between">
                                        <h4 class=" text-sm font-bold text-gray-800 dark:text-gray-300 ">Kate</h4>
                                        <span class=" text-xs text-gray-700 dark:text-gray-400 ">3 hours ago</span>
                                    </div>
                                    <div class=" truncate text-sm text-gray-700 dark:text-gray-400 ">
                                        <span class="">No kidding you choose</span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="flex items-center justify-start py-2 w-full  mt-1 px-1 cursor-pointer hover:rounded-lg hover:bg-gray-200 dark:hover:bg-gray-900 ">
                                <!-- profile image of each message room -->
                                <div class="flex-none h-12 w-12 mr-2 rounded-full overflow-hidden">
                                    <img src="/media/profile-sample.jpg" class="h-full w-full object-cover" alt="">
                                </div>
                                <!-- name -->
                                <div class="w-full overflow-hidden">
                                    <div class="flex justify-between">
                                        <h4 class=" text-sm text-gray-800 dark:text-gray-300 font-bold">Scarlet</h4>
                                        <span class=" text-xs text-gray-700 dark:text-gray-400 ">a week ago</span>
                                    </div>
                                    <div class=" truncate text-sm text-gray-700 dark:text-gray-400 ">
                                        <span class="">I like your smile 😍</span>
                                    </div>
                                </div>
                                
                            </div>
                            
                            

                            
                            
                        </div>
                    </div>
                    <div ref="chatList" :class="{'relative overflow-auto w-full h-full pb-9  sm:pb-0':true,'flex place-items-center mx-auto col-span-3':!messageSelected,'col-span-5 w-full  sm:col-span-3':messageSelected}">
                        <div v-if="messageSelected" class="sticky z-20 dark:bg-black bg-gray-50 top-0 py-4 px-2 border-b border-gray-300 dark:border-gray-600 flex justify-between items-center">
                            <div class="flex items-center w-full">
                                <router-link to="/inbox" class=" sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </router-link>
                                <div class=" text-center w-full">
                                    <h3 class=" text-gray-800 font-bold dark:text-gray-300 text-lg">Abduselam</h3>
                                </div>
                            </div>

                            
                        </div>
                        <div class="relative h-full w-full sm:px-3 px-2" >

                            <ul v-show="messageSelected" class=" h-full" >
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doin
                                    </span>
                                </li>
                                <li class=" my-3">
                                    <span class="text-sm bg-gray-300 dark:bg-gray-800 text-gray-300 px-2 py-3 rounded-full mt-2">hey everyone</span>
                                </li>
                                <li class="my-2  text-right  text-gray-200">
                                    <span class="text-sm bg-brand/10 text-brand font-semibold py-3 rounded-full px-2 mt-2   ">
                                        hey how you doing
                                    </span>
                                </li>
                                
                                
                                
                                
                            </ul>
                            <!-- message send input and button -->
                            <!-- <div v-show="messageSelected" class=" bg-black  w-full fixed py-3  bottom-0 left-0 ">

                                <div class=" border dark:border-gray-600 rounded-full w-full grid grid-cols-12 items-center ">
                                    
                                    <div class=" pl-1 w-full flex justify-center cursor-pointer text-center  col-span-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 text-yellow-700 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                                        </svg>

                                    </div>
                                    <div class=" pl-2 py-1 col-span-10 w-full">
                                        <input type="text" placeholder="Message" class="  w-full focus:outline-none dark:bg-transparent rounded text-gray-700 dark:text-gray-400  px-2 py-1" id="">
                                    </div>
                                    <div class=" col-span-1 text-center flex cursor-pointer justify-center w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 text-brand h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                        </svg>
                                    </div>
                                    
                                </div>
                            </div> -->
                            <div v-show="!messageSelected" class="hidden  sm:flex flex-col justify-center h-full w-full">
                                <div class="flex justify-center w-full">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 dark:text-gray-400 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                </div>
                                <span class="text-center pt-2 dark:text-gray-400 text-gray-500 font-bold text-2xl">Your messages</span>
                                <span class="text-center pt-2 dark:text-gray-400 text-gray-500 font-semibold text-sm">No chat selected</span>
                                
                                    

                            </div>
                        </div>
                        <div v-if="messageSelected" class="sticky z-20 dark:bg-black bg-gray-50 bottom-0 py-4 px-2 border-b border-gray-300 dark:border-gray-600 flex justify-between items-center">
                            <div class="flex items-center w-full">
                                <router-link to="/inbox" class=" sm:hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </router-link>
                                <div class=" text-center w-full">
                                    <h3 class=" text-gray-800 font-bold dark:text-gray-300 text-lg">Abduselam</h3>
                                </div>
                            </div>

                            
                        </div>
                        <!-- message part -->
                        <!-- <svg aria-label="Add Photo or Video" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M38.5 0h-29C4.3 0 0 4.3 0 9.5v29C0 43.7 4.3 48 9.5 48h29c5.2 0 9.5-4.3 9.5-9.5v-29C48 4.3 43.7 0 38.5 0zM45 38.5c0 3.6-2.9 6.5-6.5 6.5h-29c-3.3 0-6-2.5-6.4-5.6l8.3-8.3c.1-.1.3-.2.4-.2.1 0 .2 0 .4.2l6.3 6.3c1.4 1.4 3.6 1.4 5 0L35.9 25c.2-.2.6-.2.8 0l8.3 8.3v5.2zm0-9.4l-6.2-6.2c-1.3-1.3-3.7-1.3-5 0L21.3 35.3c-.1.1-.3.2-.4.2-.1 0-.2 0-.4-.2L14.2 29c-1.3-1.3-3.7-1.3-5 0L3 35.2V9.5C3 5.9 5.9 3 9.5 3h29C42.1 3 45 5.9 45 9.5v19.6zM11.8 8.2c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z">
                            </path>
                        </svg> -->
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return {
            messageSelected: true
        }
    },
    mounted() {
    this.scrollToBottom();
  },
  methods: {
    scrollToBottom() {
      this.$refs.chatList.scrollTop = this.$refs.chatList.scrollHeight;
    }
  },
  watch: {
    messages() {
      this.$nextTick(() => {
        this.scrollToBottom();
      });
    }
  }
   
}
</script>