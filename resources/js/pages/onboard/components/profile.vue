<template>
    <div x-data="{imagePreview:null,finished:@entangle('finished')}" class="w-full">
        <div class="flex justify-center mb-5 text-light">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10   ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>

                <h2 class="text-3xl font-bold text-light pl-2">Profile picture</h2>
            </div>
        </div>
    
        <div class="mt-6">
            <div class="block md:mt-0 mt-3 w-full">
            
                <input class="hidden" accept="image/*" id="profile" type="file" @change="previewImage">
                <label for="profile" v-if="imagePreview" class="flex cursor-pointer justify-center mt-4">
                    <img :src="imagePreview" class="max-w-sm">
                </label>
                <label for="profile" v-show="!imagePreview" class="flex justify-center cursor-pointer py-8 border-2 border-dashed rounded-lg w-full border-gray-400">
                    <div class="">
                        <div class="flex flex-col items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-brand">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>

                        </div>
                        <span class="text-center w-full">Please Select a profile picture</span>
                    </div>
                </label>
            
            
            </div>
            <span v-for="error in v$.image.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            <div class="mt-5">
                <label for="bio" class="label">Bio</label>
                <textarea class="block input" v-model="bio" id="bio" name="bio" placeholder="Enter your Bio" rows="3" ></textarea>
                <span v-for="error in v$.bio.$errors" :key="error.$uid" class="error">{{ error.$message }}</span>

            </div>
        </div>
    
    
        <!-- <div class="text-right mt-5 flex justify-between">
        <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','-')">Previous</button>
        <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','+')" >Next</button>            
    </div> -->
        <div v-if="!isFinal" class="mb-4 flex justify-between mt-5">
            <a @click="prev" class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand2 text-white font-bold py-2 px-4 rounded-full" >Previous</a>
            <a @click="submit" class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand2 text-white font-bold py-2 px-4 rounded-full " >Next</a>
        </div>
        
    </div>
</template>

<script>
import items from '../../components/items.vue'
import multiselect from '../../components/Multiselect.vue'
import { useVuelidate } from '@vuelidate/core'
import { required, helpers } from '@vuelidate/validators'
export default {
    components:{items,multiselect},
    mounted(){
        console.log("mounted");
        console.log(this.data);
        
    },
    props:{
        data:{
            default:{},
            isFinal:false
        }
    },
    data(){
        return {
            v$: useVuelidate(),
            profile:'',
            bio:'',
            image:'',
            imagePreview:null,
            allData:{},
            isFinal:false
        }
    },
    watch: {
        data(newData) {
            this.allData = {
                ...this.data,
                ...this.allData
            }
        }
    },
    methods:{
        prev(){
            // console.log(this.allData)
            this.$emit('prevPage')
        },
        submit(){
            this.v$.$validate()
            if(this.v$.$error){
                console.log("Not validated");
            }else{
                console.log("validated");
                let data = {
                    bio:this.bio,
                    image: this.image
                }
                this.$emit('nextPage',data)
                this.isFinal = true
            }
            
        },

      previewImage(event) {
        this.image = event.target.files[0]
        const reader = new FileReader()

        reader.onload = (event) => {
            this.imagePreview = event.target.result
        }

        reader.readAsDataURL(this.image)
        }
    },
    validations(){
        return {
            image:{
                required: helpers.withMessage("Image is required", required)
            },
            bio:{
                required: helpers.withMessage("Bio is required", required)
            }
        }
    }
}
</script>

<style>

</style>


<style scoped>
.imagePreviewWrapper {
    background-repeat: no-repeat;
    width: 250px;
    height: 250px;
    display: block;
    cursor: pointer;
    margin: 0 auto 30px;
    background-size: contain;
    background-position: center center;
}
</style>