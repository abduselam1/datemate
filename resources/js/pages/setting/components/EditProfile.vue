<template>
    <div >
        <h4 class=" sm:text-xl text-lg font-semibold text-light">Edit your profile</h4>
        <div class="block mt-5 w-full">
                <label for="" class="label ">Profile picture</label>
                <input class="hidden" accept="image/*" id="profile" type="file" @change="previewImage">
                <!-- <label for="profile" v-if="imagePreview" class="flex justify-center mt-4">
                    <img  class="max-w-sm">
                </label> -->
                <label for="profile" v-show="imagePreview" class="flex justify-center  rounded-lg border-gray-400">
                    <div class="relative  sm:w-44 sm:h-44 w-32 h-32 rounded-full  overflow-hidden">
                        <img :src="imagePreview" class="h-full w-full  object-cover" alt="">
                        <span class="absolute right-0 bottom-0 w-full flex z-20 pb-2 pt-3 text-gray-100 items-center justify-center bg-gradient-to-b from-transparent to-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>

                        </span>
                        <!-- <span class="text-center w-full">Please Select a profile picture</span> -->
                    </div>
                </label>
                <label for="profile" v-show="!imagePreview" class="flex justify-center  rounded-lg border-gray-400">
                    <div class="relative  sm:w-44 sm:h-44 w-32 h-32 rounded-full  overflow-hidden">
                        <img src="/media/profile-sample.jpg" class="h-full w-full  object-cover" alt="">
                        <span class="absolute right-0 bottom-0 w-full flex z-20 pb-2 pt-3 text-gray-100 items-center justify-center bg-gradient-to-b from-transparent to-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                            </svg>

                        </span>
                        <!-- <span class="text-center w-full">Please Select a profile picture</span> -->
                    </div>
                </label>
                
                
        </div>
        <div class="mt-3 w-full mx-2">
            <label for="first_name" class="label">First Name</label>
            <input type="text" name="name" id="first_name" v-model='firstName' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full mx-2">
            <label for="last-name" class="label">Last Name</label>
            <input type="text" name="name" id="last-name" v-model='lastName' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full mx-2">
            <label for="email" class="label">Email</label>
            <input type="email" name="email" id="email" v-model='email' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full mx-2">
            
                <label for="Isex" class=" label">Interested sex</label>
                <select name="Isex" id="Isex" class="input mt-2 block">
                    <option value="">Select Your preference</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="both">Both</option>
                </select>
        </div>

        <div class="flex justify-end pr-5 mt-5 mb-5">
            
                <button type="submit" class="px-3 py-1 text-dark bg-gradient-to-r from-brand to to-brand2 rounded-xl">Update</button>
        </div>
        
        
    </div>
</template>

<script>
export default {
    data(){
        return {
            imagePreview:null,
            firstName:'Abduselam',
            lastName:'Muhammed',
            email:'abduselam@test.com'
        }
    },
    methods:{
        previewImage(event){
            const file = event.target.files[0]
            const reader = new FileReader()

            reader.onload = (event) => {
                this.imagePreview = event.target.result
            }

            reader.readAsDataURL(file)
        }
    }

}
</script>

<style>

</style>