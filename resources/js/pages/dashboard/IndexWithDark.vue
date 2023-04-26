<template>
    <div class=" lg:grid flex lg:grid-cols-5 ">
        <div class="relative h-screen lg:h-full dark:bg-black hidden border-r sm:block lg:col-span-1 border-gray-300 dark:border-gray-600 px-2 lg:px-5">
            <img src="/media/logo/date-mate.png" class="h-10 mt-10 hidden lg:block" alt="not ">
            <img src="/media/logo/logo.png" class="h-10 mt-10 lg:hidden block" alt="not ">
            
            <!-- <h1 class="mt-10 text-4xl font-brand font-bold">Sample</h1> -->
            <div class=" ">

                <div class=" truncate mt-10 flex flex-col overflow-auto">
                    <router-link to="/" class="home-page-link">
                        <icon-link :count="5" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7  dark:text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300  font-ubuntu">Home</span>
                    </router-link>

                    <router-link to="/message" class="home-page-link">
                        <icon-link>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7  dark:text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                            </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu">Message</span>
                    </router-link>


                    <router-link to="/matchs" class="home-page-link">
                        <icon-link>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7  dark:text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu">Matchs</span>
                    </router-link>
                    <router-link to="/notifications" class="home-page-link">
                        <icon-link>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7  dark:text-gray-300">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu">Notifications</span>
                    </router-link>
                    <router-link to="/profile" class="home-page-link">
                        <icon-link>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 dark:text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu ">Profile</span>
                    </router-link>
                    <router-link to="/setting" class="home-page-link">
                        <icon-link  >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 dark:text-gray-300 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </icon-link>
                        <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu ">Setting</span>
                    </router-link>


                    

                
                </div>
            </div>
            <div @click="showMore = !showMore" class=" mx-2 lg:mx-5 w-full truncate absolute bottom-0 left-0 cursor-pointer">
                <div class="text-gray-600 font-semibold mt-3 px-2 py-2 mb-1 rounded-lg flex items-center">
                    <icon-link >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 dark:text-gray-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                    </icon-link>
                    <span class=" hidden lg:block dark:text-gray-300 text-base font-ubuntu ">More</span>
                </div>
            </div>


            <!-- Option lists -->
            <div :class="{'hidden':!showMore}" class="  transform transition ease-in duration-1000 bg-white dark:bg-gray-900 absolute w-64 mx-2 lg:mx-5 bottom-14 left-0 z-30 flex flex-col py-3 rounded-2xl shadow-md  dark:shadow-gray-900">
                <div class=" px-2 cursor-pointer flex py-2 border-b-2  dark:text-gray-300 text-gray-700 dark:border-gray-700 border-gray-200 justify-between items-center">
                    <span class=" text-base font-ubuntu">Setting</span>
                    <svg aria-label="Settings" class=" fill-current w-7 h-7" color="" fill="" height="24" role="img"
                        viewBox="0 0 24 24" width="24">
                        <circle cx="12" cy="12" fill="none" r="8.635" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></circle>
                        <path
                            d="M14.232 3.656a1.269 1.269 0 0 1-.796-.66L12.93 2h-1.86l-.505.996a1.269 1.269 0 0 1-.796.66m-.001 16.688a1.269 1.269 0 0 1 .796.66l.505.996h1.862l.505-.996a1.269 1.269 0 0 1 .796-.66M3.656 9.768a1.269 1.269 0 0 1-.66.796L2 11.07v1.862l.996.505a1.269 1.269 0 0 1 .66.796m16.688-.001a1.269 1.269 0 0 1 .66-.796L22 12.93v-1.86l-.996-.505a1.269 1.269 0 0 1-.66-.796M7.678 4.522a1.269 1.269 0 0 1-1.03.096l-1.06-.348L4.27 5.587l.348 1.062a1.269 1.269 0 0 1-.096 1.03m11.8 11.799a1.269 1.269 0 0 1 1.03-.096l1.06.348 1.318-1.317-.348-1.062a1.269 1.269 0 0 1 .096-1.03m-14.956.001a1.269 1.269 0 0 1 .096 1.03l-.348 1.06 1.317 1.318 1.062-.348a1.269 1.269 0 0 1 1.03.096m11.799-11.8a1.269 1.269 0 0 1-.096-1.03l.348-1.06-1.317-1.318-1.062.348a1.269 1.269 0 0 1-1.03-.096"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <div class=" px-2 cursor-pointer flex py-2 border-b-2 dark:text-gray-300 text-gray-700 dark:border-gray-700 border-gray-200 justify-between items-center">
                    <span class=" text-base font-ubuntu">Activity</span>
                    <svg aria-label="Your activity" class="fill-current w-7 h-7" color="" fill="" height="24"
                        role="img" viewBox="0 0 24 24" width="24">
                        <path d="M12 1.505a10.5 10.5 0 11-7.424 17.924" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                        <polyline fill="none" points="8.893 15.108 12 12 12.012 12.012 12.012 5.793" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                        <circle cx="7.24" cy="2.651" r="1.125"></circle>
                        <circle cx="3.515" cy="5.83" r="1.125"></circle>
                        <circle cx="1.636" cy="10.353" r="1.125"></circle>
                        <circle cx="2.01" cy="15.235" r="1.125"></circle>
                    </svg>

                </div>
                <div class=" px-2 cursor-pointer flex py-2 border-b-2 dark:text-gray-300 text-gray-700 dark:border-gray-700 border-gray-200 justify-between items-center">
                    <span class=" text-base font-ubuntu">Switch appearance</span>
                     <svg aria-label="Theme icon" class="w-7 h-7 fill-current" color="" fill="" height="24" role="img"
                        viewBox="0 0 16 16" width="24">
                        <path
                            d="M8.05 16C3.61 16 0 12.39 0 7.95 0 3.99 2.83.65 6.72 0c.49-.03.87.22.99.6.11.38-.05.78-.41 1-1.7.93-2.75 2.69-2.75 4.61 0 2.89 2.35 5.25 5.25 5.25a5.25 5.25 0 0 0 4.61-2.74c.19-.37.61-.54 1.01-.4.42.14.66.56.58 1.01A8.044 8.044 0 0 1 8.05 16zM5.8 1.32c-2.78.93-4.73 3.56-4.73 6.63 0 3.85 3.13 6.99 6.99 6.99 3.04 0 5.66-1.93 6.61-4.72a6.301 6.301 0 0 1-4.87 2.31c-3.48 0-6.31-2.83-6.31-6.31-.01-1.93.86-3.71 2.31-4.9zm9.54 7.89s0 .01 0 0c0 .01 0 0 0 0z"
                            fill="currentColor"></path>
                    </svg>

                </div>
                <div @click="reportOPen = true" class=" px-2 cursor-pointer flex py-2 border-b-8 dark:text-gray-300 text-gray-700 dark:border-black border-gray-200 justify-between items-center">
                    <span class=" text-base font-ubuntu">Report a problem</span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg> -->
                    <svg aria-label="Report a problem" class="w-7 h-7 fill-current" color="" fill="" height="24"
                        role="img" viewBox="0 0 24 24" width="24">
                        <path
                            d="M18.001 1h-12a5.006 5.006 0 0 0-5 5v9.005a5.006 5.006 0 0 0 5 5h2.514l2.789 2.712a1 1 0 0 0 1.394 0l2.787-2.712h2.516a5.006 5.006 0 0 0 5-5V6a5.006 5.006 0 0 0-5-5Zm3 14.005a3.003 3.003 0 0 1-3 3h-2.936a1 1 0 0 0-.79.387l-2.274 2.212-2.276-2.212a1 1 0 0 0-.79-.387H6a3.003 3.003 0 0 1-3-3V6a3.003 3.003 0 0 1 3-3h12a3.003 3.003 0 0 1 3 3Zm-9-1.66a1.229 1.229 0 1 0 1.228 1.228A1.23 1.23 0 0 0 12 13.344Zm0-8.117a1.274 1.274 0 0 0-.933.396 1.108 1.108 0 0 0-.3.838l.347 4.861a.892.892 0 0 0 1.77 0l.348-4.86a1.106 1.106 0 0 0-.3-.838A1.272 1.272 0 0 0 12 5.228Z">
                        </path>
                    </svg>

                </div>
                <div class=" px-2 cursor-pointer flex pt-3 border-t-8 dark:border-black border-gray-200  dark:text-gray-300 text-gray-700  justify-between items-center">
                    <span class=" text-base font-ubuntu">Logout</span>
                    
                </div>
                
                
            </div>
        </div>
        <router-view />
        <!-- <div class=" lg:col-span-1 hidden lg:block"></div> -->
    </div>
    <div class=" flex sm:hidden fixed bottom-0 left-0 w-full  justify-around px-5 py-2 dark:bg-black bg-white">
        
            <router-link :to="{'name':'home'}" style="background-color: transparent;" class="bg-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-brand2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>

            </router-link>
            
            <router-link to="#" style="background-color: transparent;" class="bg-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-brand2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>

            </router-link>
            <router-link to="#" style="background-color: transparent;" class="bg-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-brand2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

            </router-link>
            <router-link :to="{'name':'setting'}" style="background-color: transparent;" class="bg-transparent">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-brand2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </router-link>
            
        </div>


        <div v-if="reportOPen">
            <popup-page>
                <div ref="componentRef" class=" block mt-8 sm:mt-20 sm:px-0 px-2 m-0 max-w-max  sm:max-w-xl  md:max-w-3xl w-full  flex-col min-h-0 rounded-lg shadow-lg bg-white">
                    
                    <div  class="flex justify-start items-center px-7 my-4 ">
                            
                        <div>
                            <label for="search">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-etdel-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                            </label>
                        </div>
                        <input type="text" id="search" class="focus:outline-none h-10 text-gray-700 font-semibold  w-full ml-4" wire:model="searchKeyword" placeholder="Restaurant, groceries, food etc" autofocus="true">
                        
                        <button @click="closePopup" class=" px-2 py-1 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                    </div>

                    
                    <div class="  mb-10  px-7 rounded-lg">
                        <div class="border-t border-gray-200"></div>
                        
                        <div class=" py-12  mx-2  ">
                            <span class="text-gray-500 text-lg font-semibold">No recent Search</span>
                        </div>

                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>
            </popup-page>
        </div>
</template>

<script>
import iconLink from '../components/IconLink.vue'
import PopupPage from '../components/PopupPage.vue'
export default {
    // name:"index",
    components:{iconLink,PopupPage},
    data(){
        return {
            showMore:false,
            reportOPen:false
        }
    },
    methods:{
        closePopup(){
            this.reportOPen = false

        }
    }
    
}
</script>
