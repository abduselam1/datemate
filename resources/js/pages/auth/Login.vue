<template>
    <div class="mx-auto md:max-w-4xl sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white sm:mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1">
            <!-- The form field -->
            <form class="mt-20 mb-10 mx-10" @submit.prevent="login">
                <h2 class=" text-3xl text-light font-bold">Welcome Back</h2>
                <span class="text-gray-600 font-semibold text-sm">Please sign in to your account</span>

                <div class="my-3">
                    <div class="mb-3">
                        <label for="email" class=" text-light font-semibold">Email</label>
                        <input type="text" v-model="mail" name="email" id="email" ref="email" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="john.doe@mail.com">
                        <span v-for="error in v$.mail.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{error.$message }}</span>
                    </div>
                    <div class="mb-2">
                        <label for="password" class=" text-light font-semibold">Password</label>
                        <input type="password" v-model="password" name="password" id="password" ref="password" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="********">
                        <span v-for="error in v$.password.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>

                    </div>
                    <span class="text-sm text-red-400 font-semibold">{{ serverError }}</span>
                
                    <div class="flex justify-between mt-2">
                        <div>
                            <input type="checkbox" v-model="remember" name="remember" class="text-brand bg-brand" id="remember">
                            <label for="remember" class="pl-3 font-semibold text-light">Remember me</label>
                        </div>
                        <div>
                            <router-link :to="{name:'forgot-password'}" class="focus:outline-brand p-1 rounded-lg text-brand font-semibold text-sm">Forgot password?</router-link>
                        </div>
                    </div>
                    <span class="text-sm text-red-400 font-semibold"></span>


                
                    <button class="mt-5 py-2 flex justify-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">
                        <svg v-show="isLoading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span v-show="!isLoading">Sign in</span>
                    </button>
                
                </div>
                
                <div class="flex justify-center">
                    <span class="text-center text-gray-400 font-semibold text-sm">Don't have and Account? <router-link :to="{name:'register',replace:true}" class="text-brand" >Register</router-link> </span>
                </div>
            </form>


            <!-- The picture to the left -->
            <div class=" md:block hidden overflow-hidden rounded-r-lg">
                <img src="/media/auth.jpg" class="h-full object-cover " alt="">
            </div>

        </div>

    </div>

</template>

<script>

import { useVuelidate } from '@vuelidate/core'
import { required, email,helpers } from '@vuelidate/validators'


export default {

    data(){
        return {
            v$: useVuelidate(),
            mail:'',
            password:'',
            remember:false,
            isLoading:false,
            serverError:'',
        }
    },
    methods: {

        

        login(){
            this.v$.$validate();
            if(this.v$.$error || this.isLoading){
                return;
            }
            this.isLoading  = true
            axios.post('/api/v1/login',{email:this.mail,password:this.password}).then((result) => {

                // console.log(result.data);
                

                if(result.status == 200){
                    if(result.data.info == null){

                        this.$router.push({name:'onboard',replace:true})
                    }
                    this.$router.push({name:'home', replace: true})
                }
                


                this.isLoading = false;
            }).catch((err) => {
                console.log(err);
                if(err.response.status == 422){
                    this.serverError = err.response.data.message
                }
                else {
                    this.serverError = "Something went wrong please try again from catch"
                }
                this.isLoading = false;
            })
            
                
            
        }
    },

    validations() {
        return {
            mail: { 
                required: helpers.withMessage("Email is required",required), 
                email: helpers.withMessage("Invalid email address",email) }, 
            password: { required: helpers.withMessage("Password is required",required) }, 
            
        }
    }
}
</script>

<style>

</style>