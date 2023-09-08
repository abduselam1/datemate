<template>
    <div class=" border-b py-5 ">
        <div class="flex group cursor-pointer items-center">
            <p class="text-light font-bold text-xl ">Interests</p>
            <div @click="showEdit = !showEdit" class="lg:hidden group-hover:block pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>
        <div v-show="! showEdit" class=" ">
<!--            <badge :text="'Music'" >-->
<!--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">-->
<!--                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" />-->
<!--                </svg>-->
<!--            </badge>-->
            <div v-if="interests.length == 0">
                <span class="text-gray-600 text-sm">You didn't told us what your interests are. Take a minute and select what your interests are</span>
                <button @click="showEdit = true" class=" block border border-gray-400 px-4 py-1 mt-2 text-sm font-semibold text-gray-700 hover:bg-gray-100  rounded-lg" >Select</button>
            </div>
            <div class="flex flex-wrap mt-2">
                <badge v-for="interest in interests" :id="interest['id']" :text="'#'+interest['name']" />
            </div>

<!--            <badge :text="'Laughing'"></badge>-->

        </div>

        <div v-show="showEdit" class="">
            <div class="w-full flex flex-wrap">
                <div v-for="interest in allInterests" class=" transform ease-in-out duration-700 px-2 text-sm py-0.5 ml-1 mt-1 bg-brand/30 text-brand flex items-center rounded-full">
                    <span class="font-semibold">{{ interest['name'] }}</span>
                    <svg @click="remove(interest['id'])" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="cursor-pointer ml-1 w-5 h-5">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>

                </div>
            </div>

            <div class="mt-5">
                <!--                <select class="setting-input outline-0 " @change="addLanguage($event)" v-model="lang" >-->
                <!--                    <option selected>Select a language</option>-->
                <!--                    <option v-for="lan in unselectedLanguage" :value="lan['id']" >{{lan['native'] ?? lan['name']}}</option>-->
                <!--                </select>-->
                <dropdown @value="handle" :items="unselectedInterest" />
                <div class="flex justify-end pt-2">
                    <button @click="update" class="px-3 py-1 bg-brand rounded-full text-white">{{ isLoading ? 'Updating ...' : 'Update' }}</button>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
import Badge from "@/pages/components/Badge.vue";
import Dropdown from "@/pages/components/Dropdown.vue";

export default {
    name: "Interest",
    components: {Dropdown, Badge},
    props:['interests'],

    mounted() {
        this.allInterests = this.interests;
        axios.get('/api/interests').
        then((result) => {

            this.interestsFromBackend = result.data
            const a = result.data

            this.unselectedInterest = a.filter((lan) =>{
                for (const lan2 of this.allInterests) {
                    if(lan['id'] == lan2['id']){
                        return false
                    }
                }
                return true
            })

        }).
        catch((err) => {
            console.log(err)
        })
    },
    data(){
        return {
            showEdit:false,
            interestsFromBackend:null,
            unselectedInterest:[],
            allInterests:[],
            isLoading:false
        }
    },

    methods:{
        remove(id)
        {
            for (const lan of this.interestsFromBackend) {
                if (lan['id'] == id){
                    this.unselectedInterest.push(lan)
                }
            }
            this.allInterests = this.allInterests.filter((lan2)=>{
                if(lan2['id'] == id){
                    return false
                }
                return true
                // console.log(lan2['id'])
            })
        },

        update(){
            this.isLoading = true
            let ids = []
            for (const lang of this.allInterests) {
                ids.push(lang['id'])
            }
            axios.put('/api/user/interest',{id:ids})
                .then((result)=>{
                    this.allInterests = result.data
                    this.showEdit = false
                    this.isLoading = false
                })
                .catch((result) => {
                    this.isLoading = false
                });
            // console.log(ids)
        },
        handle(val){

            this.unselectedInterest = this.unselectedInterest.filter((lan)=>{
                if( lan['id'] == val){
                    this.allInterests.push(lan)
                    return false
                }
                return true;
            })
        },
    }
}
</script>

<style scoped>

</style>
