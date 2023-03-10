<template>
    <div class="w-full">
        <div class="flex justify-center mb-5 text-light">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10   ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                <h2 class="text-3xl font-bold text-light pl-2">Basic Information</h2>
            </div>
        </div>
        <div class=" mt-3 block md:flex w-full">
            <div class="block w-full mr-2">
                <label for="religion" class=" text-light font-semibold">Your religion</label>
                <select name="religion" id="religion" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="">Select Your religion</option>
                    <option value="muslim">Muslim</option>
                    <option value="orthodox">Orthodox</option>
                    <option value="protestant">Protestant</option>
                    <option value="not_to_say">Rather not to say</option>
                    
                </select>
            </div>
            <div class="block md:mt-0 mt-3 w-full">
                <label for="education" class=" text-light font-semibold">Education level</label>
                <select name="education" id="education" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="">Select Your education level</option>
                    <option value="less">Less than 8th grade</option>
                    <option value="high_school">High school</option>
                    <option value="college">College diploma</option>
                    <option value="bachelor">Bachelor degree</option>
                    <option value="masters">Masters degree</option>
                    <option value="phd">PHD degree</option>
                </select>
            </div>
            
        </div>
        
        

        <div class="mt-3 md:flex block">

            <div class="block w-full mr-2">
                <label for="employment" class=" text-light font-semibold">Employment</label>
                <select name="employment" id="employment" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="">Choose your Employment</option>
                    <option value="unemployed">Un employed</option>
                    <option value="Male">Bussiness owner</option>
                    <option value="Female">Government worker</option>
                    
                </select>
            </div>
            

        </div>
        <div class="mt-3">
            <div class="block md:mt-0 mt-3 w-full">
                <!-- <label for="language" class=" text-light font-semibold">Select a Language you speak</label> -->
                <!-- <div class="container mx-auto py-8">
                    <multiselect label="Languages" :options="languages" v-model="selectedLanguages" />
                </div> -->
                <label for="language" class=" text-light font-semibold">Select a Language you speak</label>
                <div class="w-full relative focus-within:border-brand border-2 focus-within:pb-0 mt-2 pb-2 border-gray-300 rounded-lg group bg-gray-50 px-2 pt-2">
                    <div @click='isInputOpen = !isInputOpen' class="h-15">
                        <items />
                    </div>
                    <input type="text" v-if="isInputOpen" @outsideClicked="handleOutside($event)" autofocus class=" h-2 focus:outline-none bg-gray-50 px-2 py-4 w-full">
                    <div class="absolute left-0 bottom-0">
                        
                    </div>
                </div>
                
                
            </div>
        </div>
        
        
        <!-- <div class="text-right mt-5 flex justify-between">
            <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','-')">Previous</button>
            <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','+')" >Next</button>            
        </div> -->
        <div class="mb-4 flex justify-between mt-5">
            <button class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full" @click.prevent="$emit('prevPage')">Previous</button>
            <button class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " @click.prevent="$emit('nextPage')">Next</button>
        </div>
    </div>
</template>

<script>
import items from './../../components/items.vue'
import multiselect from './../../components/Multiselect.vue'
export default {
    components:{items,multiselect},
    data(){
        return {
            selectedLanguages:[],
            languages:['Amharic','English','Afar','Arabic','Oromiffa','france','Spanish','Tigregna'],
            isInputOpen:false,
            religion:'',
            education:'',
            height:'',
            employment:''
        }
    },
    methods:{
        handleOutside(e){
            this.isInputOpen = !this.isInputOpen
        }
    }
}
</script>

<style>

</style>