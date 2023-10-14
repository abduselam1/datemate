<template>
    <div @click="showEdit = !showEdit" class=" cursor-pointer border-b py-7 ">
        <div class="flex group cursor-pointer items-center">
            <p class="text-light font-bold text-xl ">Personal Info</p>

            <div class="md:hidden group-hover:block pl-3">
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
                    <span class="text-gray-500">{{ relationship ?? 'I\'d rather not to say'}}</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Religion:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">{{ religion }}</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Star sign:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">{{ starSign ?? 'I\'d rather not to say' }}</span>
                </div>
            </div>

            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Smoking:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">{{ smoking ?? 'I\'d rather not to ' }}</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Drinking:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">{{ drinking ?? 'I\'d rather not to say' }}</span>
                </div>
            </div>

        </div>

    </div>
    <popup-page @close="showEdit = false" v-show="showEdit">
        <div class="sm:mx-auto mx-3 mt-10 max-w-full sm:max-w-xl bg-white px-7 py-10 sm:mt-5 w-full rounded-lg overflow-y-scroll">
            <div class="flex text-gray-600 justify-between items-center">
                <h3 class="text-xl font-ubuntu">Edit Your Infos</h3>

                <div @click="showEdit = false" class="px-1 cursor-pointer py-1">
                    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>


            </div>

            <form @submit.prevent="save" class=" mt-5">

                <div class=" pt-2 grid md:grid-cols-5 gap-2 items-center ">
                    <label for="relationship" class="text-gray-500 font-semibold col-span-2 col">Relationship</label>
                    <select id="relationship" v-model="relationship" class=" col-span-3 setting-input">
                        <!--                        <option value="">Select your star sign</option>-->

                        <option v-for="star in consts.relationship" :key="star" :value="star">{{ star }}</option>

                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>

                <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                    <label for="sign" class="text-gray-500 font-semibold col-span-2">Star sign</label>
                    <select id="sign" v-model="starSign" class=" col-span-3 setting-input">
<!--                        <option value="">Select your star sign</option>-->

                        <option v-for="star in consts.stars" :value="star">{{ star }}</option>

                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>


                <div class=" pt-2 grid md:grid-cols-5 gap-2 items-center ">
                    <label for="height" class="text-gray-500 font-semibold col-span-2 col">Height <span class="text-sm">(cm)</span></label>
                    <input id="height" type="number" v-model="height" class=" col-span-3 text-gray-600 outline-none border border-gray-200 focus:border-brand rounded-lg px-2 py-2 " >
                </div>


                <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                    <label class="text-gray-500 font-semibold col-span-2">Do you drink?</label>
                    <select v-model="drinking" class=" col-span-3 setting-input">
                        <!--                        <option value="">Select your star sign</option>-->

                        <option v-for="yesno in consts.yesNo" :value="yesno">{{ yesno }}</option>

                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>

                <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                    <label for="smoking" class="text-gray-500 font-semibold col-span-2">Do you smoke?</label>
                    <select id="smoking" v-model="smoking" class=" col-span-3 setting-input">
                        <!--                        <option value="">Select your star sign</option>-->

                        <option v-for="yesno in consts.yesNo" :value="yesno">{{ yesno }}</option>

                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>

                <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                    <label for="religion" class="text-gray-500 font-semibold col-span-2">Religion</label>
                    <select id="religion" v-model="religionId" class=" col-span-3 setting-input">
                        <!--                        <option value="">Select your star sign</option>-->

                        <option v-for="rel in religions" :value="rel['id']">{{ rel['name'] }}</option>

                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>

                <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                    <span label for="personality" class="text-gray-500 font-semibold col-span-2">Personality</span>
                    <select id="personality" v-model="personality" class=" col-span-3 setting-input">
                        <option value="Introvert">Introvert</option>
                        <option value="Extrovert">Extrovert</option>
                        <option value="Somewhere In between">Somewhere in between</option>
                        <option selected :value="null">I would rather not to say</option>

                    </select>
                </div>


                <span v-if="error != ''" class="pt-3 text-red-500 font-semibold text-sm">{{ error }}</span>


                <div class="flex justify-end mt-3">
                    <button class="px-5 py-1 rounded-full bg-brand text-white"><span v-if="isLoading">Saving ...</span> <span v-else>Save</span></button>
                </div>
            </form>
        </div>
    </popup-page>
</template>

<script>
import PopupPage from "@/pages/components/PopupPage.vue";

export default {
    name: "Info",
    components: {PopupPage},

    props:['info'],

    mounted() {

        this.starSign = this.info.star
         this.height = this.info.height
         this.relationship = this.info.relationship
         this.smoking = this.info.smoking
        this.drinking = this.info.drinking
        this.personality = this.info.personality
        this.education = this.info.education
        this.religion = this.info.religion['name']
        this.religionId = this.info.religion.id

        axios.get('/api/v1/religion')
            .then((result) => {
                this.religions = result.data

            })
            .catch((err) => {})
    },

    data(){
        return {
            showEdit:false,
            starSign:'',
            height:'',
            relationship:'',
            smoking:'',
            drinking:'',
            personality:'',
            education:'',
            religion:'',
            religionId:'',
            religions:[],
            isLoading:false,
            error:''

        }
    },
    methods:{
        save(){

            this.isLoading = true

            const data = {
               relationship: this.relationship,
               star: this.starSign,
               height: this.height,
               drinking: this.drinking,
               smoking: this.smoking,
                religion_id: this.religionId,
                personality: this.personality
            }

            axios.put('/api/v1/user/info',data)
                .then((result) => {
                    this.$emit('newData',result.data.data)
                    this.isLoading = false
                    this.showEdit = false
                })
                .catch((err) => {
                    this.isLoading = false
                    this.error = 'Something went wrong please try again'
                });


        }
    }
}
</script>

<style scoped>

</style>
