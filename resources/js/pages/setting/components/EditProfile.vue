<template>
    <div class="px-10 bg-white border-x border-b rounded-b-xl pt-5" >
        <h4 class=" sm:text-xl text-lg text-md font-sembold  text-light">Edit your profile</h4>
        
        <div class="mt-5 w-full ">
            <label for="first_name" class="label text-slate-600">First Name</label>
            <input type="text" name="name" id="first_name" v-model='firstName' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full ">
            <label for="last-name" class="label text-slate-600">Last Name</label>
            <input type="text" name="name" id="last-name" v-model='lastName' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full ">
            <label for="email" class="label text-slate-600 mb-2">Email</label>
            <input type="email" name="email" id="email" v-model='email' class="input block mt-3 px-3 py-1 text-gray-800 w-full text-sm shadow-none">
        </div>
        <div class="mt-3 w-full ">
            
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