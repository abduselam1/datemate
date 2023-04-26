<template>
    <div class="px-10  bg-white border-x border-b rounded-b-xl pt-5 pb-5 overflow-scroll">
        <!-- <span @click="c">asd</span>
        <switch-input :label="'na'" :disabled="true" @update:na="onInputValueChange" />
        <switch-input :label="'nu'"  @update:nu="nu" />
        <switch-input :label="'ne'"  @update:ne="ne" />
        <switch-constant :value="false" />
        <div>
            <button @click="showModal = true">Open Modal</button>
            <popup-page v-if="showModal" @close="showModal = false">
                
            </popup-page>
        </div> -->
        <h3 class="text-lg font-semibold">Notifications</h3>

        <div class="mt-5 flex justify-between">
            <label for="pause">Pause all</label>
            <switch-input :label="'pause'"  @update:pause="this.pause = !this.pause" />

        </div>

        <div class="mt-10 ">
            <div class=" grid grid-cols-5 text-gray-600">
                <div class=" col-span-3"></div>
                <div class="col-span1">
                    Push
                </div>
                <div class="col-span1">
                    Email
                </div>
            </div>

            <div class="mt-5">
                <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Message</div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant />
                        </div>
                    </div>
                <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Matchs</div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant :value="pause ? false : true" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant />
                        </div>
                    </div>
                <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Liked</div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant />
                        </div>
                    </div>
                <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Visitors</div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant :value="pause ? false : true" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-constant :value="pause ? false : true" />
                        </div>
                    </div>
                <div class="grid mt-5 grid-cols-5 text-gray-600">
                    <div class=" col-span-3">Other</div>
                    <div class="col-span1 flex justify-start">
                        <switch-constant />   
                    </div>
                    <div class="col-span1 flex justify-start">
                        <switch-constant :value="pause ? false : true" />
                    </div>
                </div>

                <div class="mt-5 flex justify-end ">
                    <button @click="showEditModal = true" class="outline-none px-5 py-1 text-white bg-gradient-to-r from-brand to-brand2 rounded-full">Edit</button>
                </div>
                
                
            </div>
        </div>
        <popup-page v-show="showEditModal" @close="showEditModal = false">
            <div class=" flex mt-8 sm:mt-20 px-3 py-3 m-0 max-w-xl w-full my-auto flex-col min-h-0 rounded-lg shadow-lg bg-white">
                <div class="flex justify-between w-full">
                    <span>Edit notification setting</span>
                    <button @click="showEditModal = !showEditModal" class=" px-2 py-1 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="mt-5">
                    <div class=" grid grid-cols-5 text-gray-600">
                        <div class=" col-span-3"></div>
                        <div class="col-span1">
                            Push
                        </div>
                        <div class="col-span1">
                            Email
                        </div>
                    </div>
                    <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Message</div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="message-push" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="message-mail" />
                        </div>
                    </div>
                    <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Matchs</div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="match-push" :value="pause ? false : true" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="match-mail" />
                        </div>
                    </div>
                    <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Liked</div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="liked-push" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="liked-mail" />
                        </div>
                    </div>
                    <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Visitors</div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="visitors-push" :value="pause ? false : true" />   
                        </div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="visitors-mail" :value="pause ? false : true" />
                        </div>
                    </div>
                    <div class="grid mt-5 grid-cols-5 text-gray-600">
                        <div class=" col-span-3">Other</div>
                        <div class="col-span1 flex justify-start">
                            <switch-input label="other-push" />   
                        </div>
                        <div class="col-span1   flex justify-start">
                            <switch-input label="other-mail" :value="pause ? false : true" />
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end ">
                        <button @click="showEditModal = true" class="outline-none px-5 py-1 text-white bg-gradient-to-r from-brand to-brand2 rounded-full">Update</button>
                    </div>
                
                
                </div>

            </div>
        </popup-page>

    </div>
</template>

<script>

export default {
    data(){
        return{

            pause:false,
            nuVal:false,
            neVal:false,
            showEditModal: false,
        }
    },
    methods:{
        c(){
                console.log(this.switchValue);
                console.log(this.nuVal)
                console.log(this.neVal);
        },
        nu(newValue){
            this.nuVal = newValue;
        },
        
        ne(newValue){
            this.neVal = newValue;
        },
        
        onInputValueChange(newValue) {
            this.switchValue = newValue;
            console.log('fasd');
        }

    },

    
}
</script>

<style>

</style>