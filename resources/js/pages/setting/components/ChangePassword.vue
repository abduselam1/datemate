<template>
    <form @submit.prevent="updatePassword">
        <h4 class=" sm:text-xl md:text-2xl text-xg font-semibold text-light">Update your password</h4>

        <div class="mt-7 w-full mx-2">
            <label for="current-password" class="label">Current Password</label>
            <input type="password" name="current-password" id="current-password" placeholder="********" v-model='currentPassword' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full mx-2">
            <label for="new-password" class="label">New Password</label>
            <input type="password" name="newPassword" placeholder="********"  id="new-password" v-model='newPassword' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        <div class="mt-3 w-full mx-2">
            <label for="confirm-password" class="label">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirm-password" placeholder="********" v-model='confirmPassword' class="py-1 input text-sm mt-2 font-semibold">
        </div>
        
        <div class="flex justify-end pr-5 mt-5 mb-5">
            
                <button type="submit" class="px-3 py-1 text-dark bg-gradient-to-r from-brand to to-brand2 rounded-xl">Update</button>
        </div>
    </form>
</template>

<script>
export default {
    data(){
        return {
            currentPassword:'',
            newPassword:'',
            confirmPassword:'',
        }
    },
    methods:{
        updatePassword(){
            console.log('updatePassword');
        }
    }

}
</script>

<style>

</style>