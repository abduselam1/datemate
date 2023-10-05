<template>
    <div class=" border-b py-5 ">
        <div class="flex group cursor-pointer items-center">
            <p class="text-light font-bold text-xl ">I am here to</p>
            <div @click="showedit = !showedit" class="lg:hidden group-hover:block pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>
        <div v-show=" ! showedit" class=" mt-3 ml-2">
            <span class="text-sm text-gray-600">{{purpose}}</span>
        </div>
        <div v-show="showedit" class="mt-3 flex flex-wrap ">

            <div v-for="option in options" :key="option" class=" ">
                <input v-model="purpose" class="hidden" :value="option" type="radio" name="purpose" :id="option">
                <label :for="option" :class="{ 'border-brand': option == purpose, 'border-gray-200': option != purpose }" class="pl-1 cursor-pointer transform ease-out duration-700 pr-3 flex items-center py-1 mt-1 ml-1 border  rounded-lg text-gray-600">
                    <div class="w-3 h-3 rounded-full border flex flex-col justify-center   border-gray-400" >
                            <div :class="{'hidden':purpose != option,'flex':purpose == option}" class=" justify-center w-full">
                                <div class="w-2 h-2 transform ease-out rounded-full bg-brand"></div>
                            </div>
                        </div>
                    <span class="pl-2">
                        {{ option }}
                    </span>
                </label>
            </div>

            <div class="flex justify-between w-full mt-3">

                <button @click="cancel" class="px-3 py-1 rounded-full border border-gray-400 text-gray-600 ">Cancel</button>
                <button @click="update" class="px-3 py-1 rounded-full bg-brand text-white">Update</button>

            </div>

        </div>
    </div>

</template>

<script>
export default {
    name: "purpose",
    props: ['prps'],

    mounted(){
        this.purpose = this.prps
    },

    data(){
        return {
            options:['Here to Date','Open to chat','Ready for a relationship'],
            purpose:null,
            showedit:false,
        }
    },

    methods:{
        cancel(){
            this.purpose = this.prps
            this.showedit = false
        },
        update(){
            axios.put('/api/v1/user/purpose',{'purpose':this.purpose})
            .then((result) => {
                this.showedit = false
            })
            .catch((err) =>{

            })
        }

    }
}
</script>

<style scoped>

</style>
