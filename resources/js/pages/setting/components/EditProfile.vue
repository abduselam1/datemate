<template>
    <form @submit.prevent="update" class="px-10 bg-white border-x border-b rounded-b-xl pt-5" >
        <h4 class=" sm:text-xl text-lg text-md font-sembold  text-light">Edit your profile</h4>
        
        <div class="mt-5 w-full ">
            <label for="first_name" class="label text-slate-600">First Name</label>
            <input type="text" name="name" id="first_name" v-model='firstName' class="py-1 input text-sm mt-2 font-semibold">
            <span v-for="error in v$.firstName.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>
        <div class="mt-3 w-full ">
            <label for="last-name" class="label text-slate-600">Last Name</label>
            <input type="text" name="name" id="last-name" v-model='lastName' class="py-1 input text-sm mt-2 font-semibold">
            <span v-for="error in v$.lastName.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>
        <div class="mt-3 w-full ">
            <label for="email" class="label text-slate-600 mb-2">Email</label>
            <input type="email" name="email" id="email" v-model='email' class="input block mt-3 px-3 py-1 text-gray-800 w-full text-sm shadow-none">
            <span v-for="error in v$.email.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>
        <div class="mt-3 w-full ">
            
                <label for="Isex" class=" label">Interested sex</label>
                <select v-model="interested_sex" name="Isex" id="Isex" class="input mt-2 block">
                    <option value="">Select Your preference</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                <span v-for="error in v$.interested_sex.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>

        <div class="flex justify-end pr-5 mt-5 mb-5">
            
                <button type="submit" class="px-3 py-1 text-dark bg-gradient-to-r from-brand to to-brand2 rounded-xl">
                    <svg v-if="isLoading" class="animate-spin mx-5 m h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span v-else class="text-white font-semibold" >Update</span>
                </button>
        </div>
        
        
        <div class="fixed w-full h-full" v-show="showalert">
            <alert-component :type="alertType" :message="alertMessage"/>
        </div>
        
    </form>
</template>

<script>
import {useVuelidate} from '@vuelidate/core'
import { helpers,required,email } from '@vuelidate/validators'
import alert from "@/mixins/alert";
import alertComponent from "@/Components/alerts/Alert.vue";

export default {
    mixins: [alert],
    components:{alertComponent},
    data(){
        return {
            v$: useVuelidate(),
            firstName:'',
            lastName:'',
            email:'',
            interested_sex:'',
            isLoading:false,
            serverError:''
        }
    },
    mounted(){
        this.firstName = this.user.name
        this.lastName= this.user.last_name
        this.email = this.user.email
        this.interested_sex = this.user.interested_sex == "Female" ? 0 : 1
    },
    methods:{
        update(){
            // console.log(this.interested_sex,this.user.interested_sex);
            this.v$.$validate()
            if(this.v$.$error){
                console.log('Not validated');
                return;
            }
            if(
                this.firstName == this.user.name &&
                this.lastName == this.user.last_name &&
                this.email == this.user.email
                )
                
            {
                var idOfSex = this.user.interested_sex == "Female" ? 0 : 1
                if (this.interested_sex == idOfSex) {
                    console.log("the same");
                    return;
                }

            }
            this.isLoading = true
            var data = {
                name: this.firstName,
                last_name: this.lastName,
                email: this.email,
                interested_sex: this.interested_sex
            }
            axios.put('/api/v1/edit-profile',data).then((result) => {
                if(result.status == 200){
                    this.showAlert("Profile updated successfully", 'success')
                    this.user = result.data.data
                    console.log(this.user);
                }
                this.isLoading = false
            }).catch((err) => {
                console.warn(err);
                if(err.response.status == 422){
                    this.serverError = err.response.data.message
                }
                else{
                    this.serverError = "Something went wrong please try again."
                }
                this.isLoading = false
            });
            console.log("not the same");
            
            // console.log('Updated');
        }
    },
    validations(){
        return {
            firstName: {
                required: helpers.withMessage("First name is requird", required)
            },
            lastName: {
                required: helpers.withMessage("Last name is required",required)
            },
            email: {
                required: helpers.withMessage("Email is required",required),
                email: helpers.withMessage("Invalid email address", email)
            },
            interested_sex: {
                required: helpers.withMessage("Please select your sex interest.",required)
            }
        }
    }

}
</script>

<style>

</style>