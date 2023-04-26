<template>
    <app-bar title="Profile" />
  <div class=" bg-gray-50 col-span-5 sm:col-span-4 w-full sm:mt-0 mt-7 sm:pt-5 h-screen overflow-hidden flex">
        <div class="relative pt-5  pb-10 px-3 border-r border-y  border-gray-200 w-full sm:w-4/6  h-full overflow-y-scroll overflow-x-clip ">
            
            
            <!-- Profile photo lists -->
            <div class="relative my-2 rounded-xl flex overflow-auto w-full">
                <!-- <div class=" flex flex-col justify-center ">
                    <div class="sm:w-44 sm:h-44 w-32 h-32">
                        <img src="/media/profile-sample.jpg" class="h-full w-full rounded-full object-cover" alt="">
                    </div>
                    <p class="mt-5 w-full text-center text-2xl font-semibold text-light">Jane doe,<span class="text-lg font-semibold text-gray-600"> 22</span></p>
                    
                </div> -->
                <div class="relative cursor-pointer rounded-xl bg-gray-200 flex justify-center items-center ">
                    <div class="flex text-gray-700 flex-col justify-center  items-center sm:h-40 sm:w-40 w-32 h-32 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-center">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                        <span class=" font-semibold text-slate-500">Add photos</span>
                    </div>
                </div>
                
                <div class="relative flex flex-col justify-center group ml-2">
                    <div class="sm:w-40 sm:h-40 w-32 h-32">
                        <img src="/media/profile-sample.jpg" class="h-full w-full rounded-xl object-cover" alt="">
                    </div>
                    <div class="absolute group-hover:flex hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="relative flex flex-col justify-center group ml-2">
                    <div class="sm:w-40 sm:h-40 w-32 h-32">
                        <img src="/media/kobe-gigi.jpg" class="h-full w-full rounded-xl object-cover" alt="">
                    </div>
                    <div class="absolute group-hover:flex hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="relative flex flex-col justify-center group ml-2">
                    <div class="sm:w-40 sm:h-40 w-32 h-32">
                        <img src="/media/kobe-gigi.jpg" class="h-full w-full rounded-xl object-cover" alt="">
                    </div>
                    <div class="absolute group-hover:flex hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="relative flex flex-col justify-center group ml-2">
                    <div class="sm:w-40 sm:h-40 w-32 h-32">
                        <img src="/media/kobe-gigi.jpg" class="h-full w-full rounded-xl object-cover" alt="">
                    </div>
                    <div class="absolute group-hover:flex hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="relative flex flex-col justify-center group ml-2">
                    <div class="sm:w-40 sm:h-40 w-32 h-32">
                        <img src="/media/kobe-gigi.jpg" class="h-full w-full rounded-xl object-cover" alt="">
                    </div>
                    <div class="absolute group-hover:flex hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <div class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>

            <!-- Name and age -->

            <div class="border-b pb-5 ">
                <div class="flex justify-between items-baseline">
                    <div>
                        <p class="mt-5 w-full text-3xl font-semibold text-slate-800">Jane doe,<span class="text-xl font-semibold text-gray-600"> 22</span></p>
                    </div>
                    <div >
                        <router-link :to="{name:'setting'}" class="px-4 py-2 rounded-full font-semibold text-light hover:bg-gray-300 border border-gray-400">
                            Edit profile
                        </router-link>
                    </div>
                </div>

                <div class="flex w-full  mt-2">
                    <badge :text="'Female'" :type="'brand2'"  />
                    <badge :text="'Age 22'" :type="'brand'"  />
                </div>
            </div>


            <div class="border-b pb-7 my-6">
                <span class="text-lg font-extrabold text-gray-800"> Profile completion</span>
                
                <div class="mt-2 h-4 rounded-full w-full bg-gray-300  ">
                    <div class="w-1/2 bg-brand h-full flex flex-col items-center justify-center text-xs rounded-full text-center text-gray-100 font-semibold">55%</div>
                </div>
            </div>

            
            <div class="mt-5 border-b pb-5 ">
                <div class="flex group cursor-pointer items-center">
                    <p class="text-light font-bold text-xl ">Languages</p>
                    <div class="hidden group-hover:block pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </div>
                </div>
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

            <div class=" border-b py-5 ">
                <div class="flex group cursor-pointer items-center">
                    <p class="text-light font-bold text-xl ">I am here to</p>
                    <div class="hidden group-hover:block pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </div>
                </div>
                <div class=" mt-3 ml-2">
                    <span class="text-sm text-gray-600">Here to Date</span>
                </div>
            </div>

            <div class=" border-b py-5 ">
                <div class="flex group cursor-pointer items-center">
                    <p class="text-light font-bold text-xl ">Interests</p>
                    <div class="hidden group-hover:block pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </div>
                </div>
                <div class=" flex flex-wrap mt-2">
                    <badge :text="'Music'" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />
                        </svg>
                    </badge>
                    <badge :text="'Cooking'"></badge>
                    <badge :text="'Laughing'"></badge>
                </div>

                
            </div>

            <div class=" border-b py-7 ">
                <div class="flex group cursor-pointer items-center">
                    <p class="text-light font-bold text-xl ">Education and Work</p>

                    <div class="hidden group-hover:block pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-sm text-gray-500">Tell people more about your self by adding your work and education details</span>
                </div>
                <div class="flex">
                    <div class="flex items-center px-5 cursor-pointer hover:bg-gray-100 py-2 mt-2 border border-gray-300 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <div class="ml-2">
                            <span class="text-sm font-semibold text-gray-800">Add now</span>
                        </div>
                    </div>

                </div>

                
            </div>


            <div class=" border-b py-7 ">
                <div class="flex group cursor-pointer items-center">
                    <p class="text-light font-bold text-xl ">Personal Info</p>

                    <div class="hidden group-hover:block pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="text-sm text-gray-500">
                        Write a few words about your temperement, personality, attitude to life and people.<br> What distinguishes you from the crowd? What are your positive and negative traits?
                    </span>
                </div>
                
                <div class="mt-5 ">
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">Relationship:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">I'm Single</span>
                        </div>
                    </div>
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">Sexuality:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">I'm Straight</span>
                        </div>
                    </div>
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">Star sign:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">Leo</span>
                        </div>
                    </div>
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">appearance:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">Add info</span>
                        </div>
                    </div>
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">Smoking:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">Not at all</span>
                        </div>
                    </div>
                    <div class="flex font-semibold text-sm py-2">
                        <div class="w-1/3   ">
                            <span class=" text-gray-800">Drinking:</span>
                        </div>
                        <div class="w-full">
                            <span class="text-gray-500">Often</span>
                        </div>
                    </div>

                    
                    
                </div>

                
            </div>


            <div class=" border-b py-7 ">
                    <div class="flex group cursor-pointer items-center">
                        <div class="flex items-center">

                            <p class="text-light font-bold text-xl  pr-1">Preference  </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-amber-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                            </svg>

                        </div>

                        <div class="hidden group-hover:block pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="text-sm text-gray-500">
                            Filter out what type of person you need to meed.<br> What personality do you like the most on your mate? What are your turn on and turn of behaviors?
                        </span>
                    </div>
                
                    <div class="mt-5 ">
                        
                        <div class="flex font-semibold text-sm py-2">
                            <div class="w-1/3   ">
                                <span class=" text-gray-800">Sexuality:</span>
                            </div>
                            <div class="w-full">
                                <span class="text-gray-500">I'm Straight</span>
                            </div>
                        </div>
                        <div class="flex font-semibold text-sm py-2">
                            <div class="w-1/3   ">
                                <span class=" text-gray-800">Star sign:</span>
                            </div>
                            <div class="w-full">
                                <span class="text-gray-500">Leo</span>
                            </div>
                        </div>
                        <div class="flex font-semibold text-sm py-2">
                            <div class="w-1/3   ">
                                <span class=" text-gray-800">appearance:</span>
                            </div>
                            <div class="w-full">
                                <span class="text-gray-500">Add info</span>
                            </div>
                        </div>
                        <div class="flex font-semibold text-sm py-2">
                            <div class="w-1/3   ">
                                <span class=" text-gray-800">Smoking:</span>
                            </div>
                            <div class="w-full">
                                <span class="text-gray-500">Not at all</span>
                            </div>
                        </div>
                        <div class="flex font-semibold text-sm py-2">
                            <div class="w-1/3   ">
                                <span class=" text-gray-800">Drinking:</span>
                            </div>
                            <div class="w-full">
                                <span class="text-gray-500">Often</span>
                            </div>
                        </div>

                    
                    
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
            
            <div class=" border-t pt-5 mt-5 flex justify-center">
                <div class="flex flex-col items-center justify-center">
                    <ul class="text-gray-800 flex">
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="to">Help</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="about" >About</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="contact" >Contact</router-link>
                        </li>
                        <li class="mx-2 text-sm font-semibold text-gray-500">
                            <router-link to="manage-cookies" >Manage cookies</router-link>
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

export default {
    components:{badge},
    created(){
        // let year = 1000*60*60*24*365
        // this.year = Math.round(Date.now() / year)
        const d = new Date();
        this.year = d.getFullYear();
    },
    data(){
        return {
            tab:1,
            year: null
        }
    }
}
</script>

<style>

</style>