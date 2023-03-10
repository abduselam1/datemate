<template>
    <div class=" mx-auto md:max-w-4xl sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white sm:mt-16">
        <div class="grid md:grid-cols-2 grid-cols-1">
            <!-- The form field -->
            <form class="mt-20 mb-10 mx-10" @submit.prevent="register">
                <h2 class=" text-3xl text-light font-bold">Wellcome to {{app_name}}</h2>
                <span class="text-gray-600 font-semibold text-sm">Please create account to continue</span>

                <div class="my-3">
                    <div class="mb-5">
                        <label for="name" class=" text-light font-semibold">Name</label>
                        <input type="text" name="name" id="name" ref="name" class="input block mt-3 px-3  text-gray-800 w-full" placeholder="Name">
                    </div>

                    <div class="mb-5">
                        <label for="email" class=" text-light font-semibold">Email</label>
                        <input type="text" name="email" id="email" ref="email" class="input block mt-3 px-3 text-gray-800 w-full" placeholder="john@mail.com">
                    </div>

                    <div class="mb-2">
                        <label for="password" class=" text-light font-semibold">Password</label>
                        <input type="password" name="password" id="password" ref="password" class="input block mt-3 px-3 pt-1 text-gray-800 w-full" placeholder="********">
                    </div>
                    

                    <button class="mt-5 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">Sign in</button>
                    
                </div>
                <!-- <div class="flex justify-evenly content-start items-start">
                    <p class="text-start">______________</p>
                    <p class="text-end">Or</p>
                    <p class="text-start">_______________</p>
                </div> -->
                <!-- <div class="flex items-center justify-center space-x-2">
                    <span class="h-px w-16 bg-gray-200"></span>
                    <span class="text-gray-300 font-normal">or continue with</span>
                    <span class="h-px w-16 bg-gray-200"></span>
                </div> -->
                <div class="flex justify-center">
                    <span class="text-center text-gray-400 font-semibold text-sm">Already have an Account? <router-link class=" text-brand" :to="{'name':'login'}">Login</router-link></span>
                </div>
            </form>


            <!-- The picture to the left -->
            <div class="md:block hidden overflow-hidden rounded-r-lg">
                <img src="/media/auth.jpg" class="h-full object-cover " alt="">
            </div>

        </div>

    </div>
</template>

<script>
export default {


    data(){
        return {
            usename:'',
            password:''
        }
    },
    methods: {
        login(){
            console.log('login');
        }
    }
}
</script>

<style>

</style>