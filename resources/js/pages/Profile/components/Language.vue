<template>
    <div class="mt-5 border-b pb-5 ">
        <div class="flex group cursor-pointer items-center">
            <p class="text-light font-bold text-xl ">Languages</p>
            <div @click="showEdit = !showEdit" class="lg:hidden group-hover:block pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>
        <div v-show="! showEdit" class="flex w-full mt-3 flex-wrap ">
            <badge v-for="language in languages" :text="language.name" :key="language.id" :type="'brand'"  />

        </div>

        <div v-show="showEdit" class="mt-5  pb-5 w-full ">
            <div class="w-full flex">
                <div v-for="language in languages" :key="language.id" class="px-2 text-sm py-0.5 ml-1 bg-brand/30 text-brand flex items-center rounded-full">
                    <span class="font-semibold">{{ language['native'] ?? language['name'] }}</span>
                    <svg @click="remove(language['id'])" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="cursor-pointer ml-1 w-5 h-5">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>

                </div>
            </div>

            <div class="mt-5">
<!--                <select class="setting-input outline-0 " @change="addLanguage($event)" v-model="lang" >-->
<!--                    <option selected>Select a language</option>-->
<!--                    <option v-for="lan in unselectedLanguage" :value="lan['id']" >{{lan['native'] ?? lan['name']}}</option>-->
<!--                </select>-->
                <dropdown @value="handle" :items="unselectedLanguage" />
                <div class="flex justify-end pt-2">
                    <button @click="update" class="px-3 py-1 bg-brand rounded-full text-white">Update</button>
                </div>
            </div>


        </div>

    </div>


    <!-- <popup-page v-show="showEdit" @close="close">
        <div class="flex mt-8 sm:mt-20 px-3 py-3 m-0 max-w-lg w-full my-auto flex-col min-h-0 rounded-lg shadow-lg bg-white">
            <div class="flex justify-between">
                <h4 class="text-lg font-semibold text-gray-700">Edit your Languages</h4>
                <button @click="close" class=" px-2 py-1 text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </popup-page>-->

</template>

<script>
import badge from "@/pages/components/Badge.vue";
import alert from "@/mixins/alert";
import PopupPage from "@/pages/components/PopupPage.vue";
import Dropdown from "@/pages/components/Dropdown.vue";

export default {
    name: "Language",
    components: {Dropdown, PopupPage, badge},
    props:['allLanguages'],
    mixins:[alert],
    data(){
        return {
            languages:null,
            showEdit: false,
            languagesFromBackend:null,
            unselectedLanguage:[],
            lang:''
        }
    },
    mounted() {
        this.languages = this.allLanguages;
        

            this.unselectedLanguage = this.consts.data.languages.filter((lan) =>{
                for (const lan2 of this.languages) {
                    if(lan['id'] == lan2['id']){
                        return false
                    }
                }
                // console.log(lan)
                return true
            })

        
    },
    methods:{
        update(){
            // console.log(this.languages)
            let ids = []
            for (const lang of this.languages) {
                ids.push(lang['id'])
            }
            axios.put('/api/v1/user/language',{id:ids})
                .then((result)=>{
                    this.languages = result.data
                    this.showEdit = false
                })
                .catch((result) => {

                });
            console.log(ids)
        },
        handle(val){
            console.log(val)
            this.unselectedLanguage = this.unselectedLanguage.filter((lan)=>{
                if( lan['id'] == val){
                    this.languages.push(lan)
                    return false
                }
                return true;
            })
        },
        close(){
            this.showEdit = false
        },
        addLanguage(event){
            this.unselectedLanguage = this.unselectedLanguage.filter((lan)=>{
                if( lan['id'] == event.target.input){
                    this.languages.push(lan)
                    return false
                }
                return true;
            })
            console.log(event.target.value)
            this.lang = null
        },
        remove(id){
            for (const lan of this.consts.data.languages) {
                if (lan['id'] == id){
                    this.unselectedLanguage.push(lan)
                }
            }
            this.languages = this.languages.filter((lan2)=>{
                if(lan2['id'] == id){
                    return false
                }
                return true
                // console.log(lan2['id'])
            })
            // console.log(id)
        }
    }
}
</script>

<style scoped>

</style>
