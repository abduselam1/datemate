<template>
    <div class="w-full">
        <div class="flex justify-center mb-5 text-light">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10   ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                <h2 class="text-3xl font-bold text-light pl-2">Personal Information</h2>
            </div>
        </div>
        <div class=" mt-3 block md:flex w-full">
            <div class="block w-full mr-2">
                <label for="religion" class=" text-light font-semibold">Your religion</label>
                <select v-model="religion" id="religion" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected>Select Your religion</option>
                    
                        <option v-for="rlg in consts.data.religions" :key="rlg.id" :value="rlg.id">{{ rlg.name }}</option>
                    
                    <option value="0">Rather not to say</option>

                </select>
                <span v-for="error in v$.religion.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>
            </div>
            <div class="block md:mt-0 mt-3 w-full">
                <label for="education" class=" text-light font-semibold">Education level</label>
                <select v-model="education" id="education" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Select Your education level</option>
                    
                        <option v-for="educationLevel in consts.educationLevels" :key="educationLevel" :value="educationLevel" >{{ educationLevel }}</option>
                    
                </select>
                <span v-for="error in v$.education.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            </div>

        </div>

        <div class="">
            <div class="block mt-5 w-full">
                <label for="purpose" class=" text-light font-semibold">Why you here</label>
                <select v-model="purpose" id="purpose" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Select Your purpose</option>
                    
                    <option v-for="pr in consts.purposeOptions" :key="pr" :value="pr" >{{ pr }}</option>
                    
                </select>
                <span v-for="error in v$.purpose.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            </div>
        </div>



        <div class="mt-3 md:flex block">

            <div class="block w-full mr-2">
                <label for="employment" class=" text-light font-semibold">Employment</label>
                <select v-model="employment" id="employment" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Choose your Employment</option>
                    
                        <option v-for="jobTitle in consts.data.jobTitles" :key="jobTitle['id']" :value="jobTitle['id']">{{ jobTitle['name'] }}</option>
                    

                </select>
                <span v-for="error in v$.employment.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            </div>


        </div>
        <div x-data="{isInputOpen:false}"  class="mt-3">
            <div class="block md:mt-0 mt-3 w-full">
                <label for="language" class=" text-light font-semibold">Select a Language you speak</label>
                <div class="w-full focus-within:outline-brand  mt-2 pb-2 border-gray-300 rounded-lg group px-2 pt-2">
                    
                    <Select2 v-model="languages" :multiple="true"  :items="consts.data.languages"  />
                    
                </div>

                <span v-for="error in v$.languages.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            </div>
        </div>

        <div class="mb-4 flex justify-between mt-5">
            <a class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full" @click="previous">Previous</a>
            <a class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " @click="next">Next</a>
        </div>
    </div>
</template>

<script>

import {useVuelidate} from '@vuelidate/core'
import {required, helpers} from '@vuelidate/validators'

import items from './../../components/items.vue'
import multiselect from './../../components/Multiselect.vue'
import Select2 from './../../components/select2.vue'
export default {
    components:{items,multiselect,Select2},
    mounted(){
        console.log("consts.data.languages");
        console.log(this.consts.data.languages);
    },
    data(){
        return {
            v$:useVuelidate(),
            languages:[],
            isInputOpen:false,
            religion:'',
            education:'',
            height:'',
            employment:'',
            purpose:'',
            s:['asdf','rtw','efg']
        }
    },
    methods:{
        handleOutside(e){
            this.isInputOpen = !this.isInputOpen
        },
        next(){
            
            this.v$.$validate()
            if(this.v$.$error){
            
                return;
            }else{
                var data ={
                    languages:this.languages, 
                    religion:this.religion, 
                    education:this.education, 
                    job_title:this.employment, 
                    purpose:this.purpose
                }
                this.$emit('nextPage',data)
                
            }
            
        },
        previous(){
            // console.log('pe');
            this.$emit('prevPage')
        }
    },
    validations(){
        return {
            languages:{required},
            religion: {required},
            education:{required},
            employment: {required},
            purpose:{required},


        }
    }
}
</script>

<style>

</style>