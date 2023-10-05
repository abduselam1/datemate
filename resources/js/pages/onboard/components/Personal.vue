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
                <select wire:model="religion" id="religion" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected>Select Your religion</option>
                    
                        <option v-for="rlg in religions" :key="rlg.id" :value="rlg.id">{{ rlg.name }}</option>
                    
                    <option value="">Rather not to say</option>

                </select>
                <span class="error">{{ '' }}</span>
            </div>
            <div class="block md:mt-0 mt-3 w-full">
                <label for="education" class=" text-light font-semibold">Education level</label>
                <select wire:model="education" id="education" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Select Your education level</option>
                    
                        <option v-for="educationLevel in educationLevels" :key="educationLevel" value="{{ $educationLevel }}" >{{ $educationLevel }}</option>
                    
                </select>
                 <span class="error">{{ $message }}</span>

            </div>

        </div>

        <div class="">
            <div class="block mt-5 w-full">
                <label for="education" class=" text-light font-semibold">Why you here</label>
                <select wire:model="purpose" id="education" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Select Your purpose</option>
                    
                    <option v-for="pr in purposeOptions" :key="pr" :value="pr" >{{ $pr }}</option>
                    
                </select>
                <span class="error">{{ '' }}</span>

            </div>
        </div>



        <div class="mt-3 md:flex block">

            <div class="block w-full mr-2">
                <label for="employment" class=" text-light font-semibold">Employment</label>
                <select wire:model="employment" id="employment" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                    <option value="" selected >Choose your Employment</option>
                    
                        <!-- <option v-for="" value="{{$jobTitle->id}}">{{ $jobTitle -> name }}</option> -->
                    

                </select>
                <span class="error">{{ $message }}</span>

            </div>


        </div>
        <div x-data="{isInputOpen:false}"  class="mt-3">
            <div class="block md:mt-0 mt-3 w-full">
                <label for="language" class=" text-light font-semibold">Select a Language you speak</label>
                <div class="w-full focus-within:outline-brand  mt-2 pb-2 border-gray-300 rounded-lg group px-2 pt-2">
                    <div x-click='isInputOpen = !isInputOpen' class="flex">
                        @foreach ($languages as $language)
                        <div class="flex mb-1 mr-1">
                            <div class="px-2 py-1 bg-brand opacity-50 flex items-center rounded-full text-dark">
                                <span class="text-sm text-white pr-2">{{ $language['native'] ?? $language['name'] }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white cursor-pointer"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>


                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="relative ">
                        <input type="text"   @click="isInputOpen = true" wire:model="searchLanguage" autofocus placeholder="Search language" class=" h-2 border-2 focus:border-brand border-gray-200 outline-none rounded-lg  mt-1 px-2 py-4 w-full">

                            <div :class="{ 'hidden': !isInputOpen }" class="absolute w-full left-0 top-12">
                                @if (empty($allLanguages->toArray()))
                                    <div class=" py-5 flex justify-center px-1 bg-gray-50 rounded-lg">
                                        <span>No Language found</span>
                                    </div>
                                @else
                                    <ul class="px-1 py-1 bg-gray-50 rounded-lg">
                                        @foreach ($allLanguages as $selLan)
                                            <li wire:click="addLanguage({{$selLan->id}},)" class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md " >{{ $selLan -> name }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>

                    </div> -->
                </div>


            </div>
        </div>

        <div class="mb-4 flex justify-between mt-5">
            <a class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full" wire:click="previous">Previous</a>
            <a class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " wire:click="submit">Next</a>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
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