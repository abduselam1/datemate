<template>
    <div class="relative my-2 rounded-xl flex w-full overflow-auto">

        <form @submit.prevent="" class="relative rounded-xl bg-gray-200 flex justify-center items-center ">

            <input @change="newProfile" type="file" id="profile" ref="profile" class="hidden" >
            <label for="profile" class="flex text-gray-700 flex-col justify-center  items-center sm:h-40 sm:w-40 w-32 h-32 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-center">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                </svg>
                <span class=" font-semibold text-slate-500">Add photos</span>
            </label>
            <div v-show="imagePreview != null">
                <popup-page @close="resetData">
                    <div class="mt-10 max-w-3xl mb-3 overflow-scroll">
                        <img :src="imagePreview" class="w-full" />
                        <div class="grid grid-cols-2 gap-3 justify-between mt-5">
                            <div @click="uploadImage" class="w-full rounded-xl py-1 flex justify-center text-white font-semibold cursor-pointer bg-brand">
                                <span v-if="! isloading">Upload</span>
                                <loading-spin v-if="isloading" />
                            </div>
                            <div @click="resetData" class="w-full rounded-xl py-1 text-center bg-gray-300 font-semibold cursor-pointer text-gray-800">
                                <span>Discard</span>
                            </div>
                        </div>
                    </div>
                </popup-page>
            </div>
        </form>

        <div  v-for="picture in pictures" :key="picture['id']"
              class="relative flex flex-col justify-center group ml-2">
            <div class="sm:w-40 sm:h-40 w-32 h-32" >
                <img :src="'/'+picture['thumbnail_url']" :class="{ 'border-2 border-brand2 rounded-xl':
                        picture['is_primary'] }"
                     class="h-full w-full rounded-xl object-cover" alt="">
            </div>
            <div
                class="absolute group-hover:flex flex lg:hidden transform ease-out duration-1000 left-0 bottom-0 w-full justify-evenly">
                <div @click="makePrimary(picture['id'])" v-if="! picture['is_primary']"
                     class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </div>
                <div @click="deletePicture(picture['id'])"
                     class="mb-2 p-2 rounded-xl bg-gray-600/60 cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-50">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </div>

            </div>

        </div>


    </div>

    <div class="fixed w-full h-full" v-show="showalert">
        <alert :type="alertType" :message="alertMessage"/>
    </div>
</template>

<script>
import LoadingSpin from "@/Components/LoadingSpin.vue";
import axios from "axios";
import Alert from "@/Components/alerts/Alert.vue";
import alert from "@/mixins/alert";

export default {
    name: "ProfilePicture",
    components: {Alert, LoadingSpin},
    props: ['profilePictures'],
    mixins:[alert],
    data(){
        return {
            pictures:null,
            imagePreview:null,
            newProfileImage:null,
            isloading:false,
        }
    },
    created() {
        this.pictures = this.profilePictures
    },
    methods:{
        resetData(){
            this.imagePreview = null;
            this.newProfileImage = null;
        },
        newProfile(event){
            // const file = this.$refs.profile.files;
            this.newProfileImage = event.target.files[0]

            const reader = new FileReader()

            reader.onload = (event) => {
                this.imagePreview = event.target.result
            }

            reader.readAsDataURL(this.newProfileImage)

        },
        deletePicture(id){

            axios.delete('/api/picture/'+id)
                .then((result) => {

                    this.pictures = result.data
                    this.showAlert("profile picture deleted successfully",)
                })
                .catch((err) => {
                    // console.warn(err)
                    this.showAlert('Something went wrong please try again',);

                })
        },
        uploadImage(){

            this.isloading = true
            const data = new FormData;

            data.append('picture',this.newProfileImage);

            axios.post('/api/picture',data)
                .then((result) => {
                    this.pictures = result.data
                    this.isloading = false
                    this.imagePreview = null
                    this.showAlert("New profile picture Uploaded successfully",)

                })
                .catch(err => {

                    console.warn(err)
                    this.isloading = false
                    this.showAlert("Something went wrong please try again")

                })

        },
        makePrimary(id)
        {
            const data = new FormData;
            data.append('is_primary',true)
            axios.put('/api/picture/'+id, {'is_primary':true})
                .then((result) => {
                    console.log(result)
                    this.pictures = result.data
                    this.showAlert("profile set to primary successfully",)
                })
                .catch((err) => {
                    console.warn(err)
                    // if(response)
                    this.showAlert('Something went wrong please try again','error');

                })
        }
    }
}
</script>

<style scoped>

</style>
