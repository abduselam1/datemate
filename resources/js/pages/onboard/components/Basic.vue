<template>
    <div>
        <form class="w-full h-full " >
            <div class="flex justify-center mb-5">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                    </svg>
                    <h2 class="text-3xl font-bold text-light pl-2">Basic Information</h2>
                </div>
            </div>
            <div class=" mt-3 block md:flex w-full">
                <div class="block w-full mr-2">
                    <label for="sex" class=" label">Your sex</label>
                    <select v-model="sex" id="sex" class="input mt-2 block border-gray-300 bg-gray-50">
                        <option value="">Select Your sex</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                    <span v-for="error in v$.sex.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>
                </div>
                <div class="block w-full pl-1">
                    <label for="Isex" class=" label">Interested sex</label>
                    <select v-model="interestedSex" id="Isex" class="input mt-2 block outline-gray-300 bg-gray-50">
                        <option value="">Select Your preference</option>
                        <option value="1">Male</option>
                        <option value="0">Female</option>
                    </select>
                    <span v-for="error in v$.interestedSex.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>
                </div>
            
            </div>

            <div class=" mt-3 block w-full">
                <label for="phone_number" class="label">Phone number</label>
                <input type="text" v-model="phoneNumber" class="input mt-2 block outline-gray-300 bg-gray-50" id="phone_number" placeholder="Phone number">
                <span v-for="error in v$.phoneNumber.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>
            </div>
        
    
            <div class="mt-3 md:flex block">
    
                <div class="block w-full mr-2">
                    <label for="country" class=" label">Country</label>
                    <select @change="countryChanged" v-model="country" id="country" class="input mt-2 block border-gray-300 bg-gray-50">
                        <option value="">Choose your country</option>
                        
                            <option v-for="(ctry, name) in consts.data.countries " :key="name" :value="name">{{ ctry }}</option>
                        
                    </select>
                    <span v-for="error in v$.country.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

                </div>
                <div class="block md:mt-0 mt-3 pl-1 w-full">
                    <label for="city" class=" label">City</label>
                    <select v-model="city" id="city" class=" input mt-2 block border-gray-300 bg-gray-50">
                        <option value="">Select a city</option>
                        
                            <option v-for="cty in cities" :key="cty" :value="cty">{{ cty }}</option>
                        
                    </select>
                    <span v-for="error in v$.city.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

                </div>
    
            </div>
            <div class="mt-3">
                <label for="Date of birth" class="label">Date of birth</label>
                <flat-pickr class="input mt-2 block border-gray-300 bg-gray-50" id="Date of birth" v-model="dateOfBirth" />            
                <span v-for="error in v$.dateOfBirth.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>
            
            </div>
            <div class="mb-4 flex justify-end mt-5">
                <button @click.prevent="submit" class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " >Next</button>
            </div>
        
        </form>
    </div>
</template>

<script>
import { ref } from 'vue';

import { useVuelidate } from '@vuelidate/core'
import { required, email, helpers } from '@vuelidate/validators'

import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';

export default {
    components:{ flatPickr },
    data(){
        return {
            v$:useVuelidate(),
            sex:'',
            dateOfBirth:'',
            location:'',
            interestedSex:'',
            country:'',
            city:'',
            cities:[],
            phoneNumber:'',
            config: ref({
                wrap: true, // set wrap to true only when using 'input-group'
                altFormat: 'M j, Y',
                altInput: true,
                dateFormat: 'Y-m-d',
                maxDate: this.formatEndDate
                 // locale for this instance only          
            })
        }
    },
    
    methods:{
        formatEndDate(){
            let date = new Date();
            let year = date.getFullYear() - 18;
            let month = date.getMonth() - 1;
            var max_date = year + '-' + month
            return max_date;
        },
        countryChanged(){
            axios.get('/api/v1/countries/'+this.country).then((result) => {
                
                if(result.status == 200){
                    console.log(result.data);
                    this.cities = result.data
                }
            }).catch((err) => {

            })
        },
        submit(){
            
            this.v$.$validate()
            if(this.v$.$error){
                console.log('not validated');
            }else{
                var data = {
                    sex: this.sex,
                    dateOfBirth: this.dateOfBirth,
                    interestedSex: this.interestedSex,
                    country: this.country,
                    city: this.city,
                }
                
                this.$emit('nextPage',data)
            }

        },
        nextPage(){
            this.$emit('changePage',"+")
        }
    },
    validations(){
        return {
            sex: { required },
            interestedSex:{required},
            phoneNumber: {required},
            country: {required},
            city: {required},
            dateOfBirth:{required}
        }
    }
}
</script>

<style>

</style>