<template>
    <div class=" mx-auto md:max-w-4xl sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white sm:mt-10">
            <div class="grid md:grid-cols-2 grid-cols-1">
                <!-- The form field -->
                <form class="mt-16 mb-5 mx-10" @submit.prevent="register">
                    <h2 class=" text-3xl text-light font-bold">Welcome to DateMate</h2>
                    <span class="text-gray-600 font-semibold text-sm">Please create account to continue</span>

                    <div class="my-3">
                        <div class="mb-2">
                            <label for="name" class=" text-light font-semibold">Name</label>
                            <input type="text" v-model="name" id="name" ref="name" class="input block mt-3 px-3  text-gray-800 w-full" placeholder="Name">
                            <span class="text-sm text-red-400 font-semibold"></span>
                        </div>

                        <div class="mb-2">
                            <label for="Last name" class=" text-light font-semibold">Last Name</label>
                            <input type="text" v-model="last_name" id="Last name" ref="Last name" class="input block mt-3 px-3  text-gray-800 w-full" placeholder="Last Name">
                            <span class="text-sm text-red-400 font-semibold"></span>

                        </div>

                        <div class="mb-2">
                            <label for="email" class=" text-light font-semibold">Email</label>
                            <input type="text" v-model="email" id="email" ref="email" class="input block mt-3 px-3 text-gray-800 w-full" placeholder="john@mail.com">
                            <span class="text-sm text-red-400 font-semibold"></span>

                        </div>

                        <div class="mb-2">
                            <label for="password" class=" text-light font-semibold">Password</label>
                            <input type="password" v-model="password" id="password" ref="password" class="input block mt-3 px-3 pt-1 text-gray-800 w-full" placeholder="********">
                            <span class="text-sm text-red-400 font-semibold"></span>

                        </div>
                    
                        <button class="mt-5 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">
                            <svg v-show="isLoading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span v-show="!isLoading">Register</span>
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <span class="text-center text-gray-400 font-semibold text-sm">Already have an Account? <router-link :to="{'name':'login'}" class=" text-brand px-1 focus:outline-brand">Login</router-link> </span>
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
            name:'',
            lastName:'',
            email:'',
            password:'',
            isLoading:false,
        }
    },
    methods: {
        register(){
            alert([
                this.name,
                this.email,
                this.password,
                
            ]);
        }
    }
}
</script>

<style>

</style>