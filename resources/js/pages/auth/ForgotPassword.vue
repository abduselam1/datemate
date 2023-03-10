<template>
    <div class="mx-auto sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white mt-16 pt-20">
            <!-- The form field -->
            <form class="mb-10 mx-10" @submit.prevent="forgot">
                <h2 class=" text-3xl text-light font-bold ">Forgot password</h2>
                <span class="text-gray-500 font-semibold text-sm">You forget your password? No problem lets us know your email address and we will help you recover your account</span>

                <div class="my-3">
                    <div class="mb-5">
                        <label for="email" class=" text-light font-semibold">Email</label>
                        <input type="email" name="email" id="email" ref="email" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="john@mail.com">
                    </div>
                    
                    

                    <button class="mt-5 mb-10 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">Forgot</button>
                    
                </div>
                
                
            </form>

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
        forgot(){
            console.log('login');
        }
    }
}
</script>

<style>

</style>