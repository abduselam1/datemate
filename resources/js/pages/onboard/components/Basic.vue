<template>
    <div class="w-full ">
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
                <select name="sex" id="sex" class="input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Select Your sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="custom">Custom</option>
                </select>
            </div>
            <div class="block w-full">
                <label for="Isex" class=" label">Interested sex</label>
                <select name="Isex" id="Isex" class="input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Select Your preference</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="both">Both</option>
                </select>
            </div>
            
        </div>
        
        

        <div class="mt-3 md:flex block">

            <div class="block w-full mr-2">
                <label for="country" class=" label">Country</label>
                <select name="country" id="country" class="input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Choose your country</option>
                    <option value="Ethiopia">Ethiopia</option>
                    
                    <option value="Male">Us</option>
                    <option value="Female">UK</option>
                    <option value="custom">Custom</option>
                </select>
            </div>
            <div class="block md:mt-0 mt-3 w-full">
                <label for="city" class=" label">City</label>
                <select name="city" id="city" class=" input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Select a city</option>
                    <option value="addis">Addis ababa</option>
                    <option value="adama">Adama</option>
                    <option value="hawasa">Hawasa</option>
                </select>
            </div>

        </div>
        <div class="mt-3">
            <!-- <vue-tailwind-datepicker :formatter="formatter" v-model="dateValue" /> -->
            <div class=" block w-full">
                <label for="date" class=" label">Date of Birth</label>
                <input name="date" id="date" type="date" placeholder="----" class="input mt-2 block border-gray-300 bg-gray-50" />
            </div>
            
            
        </div>
        <div class="mb-4 flex justify-end mt-5">
            <button class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " @click.prevent="$emit('nextPage')">Next</button>
        </div>
        
    </div>
</template>

<script>
export default {
    data(){
        return {
            gender:'',
            dataOfBirth:'',
            location:'',
            interestedIn:''
        }
    },
    methods:{
        nextPage(){
            this.$emit('changePage',"+")
        }
    }
}
</script>

<style>

</style>