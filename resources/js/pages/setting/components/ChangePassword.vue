<template>
    <form class="px-10 bg-white border-x border-b rounded-b-xl pt-5" @submit.prevent="updatePassword">
        <h4 class=" sm:text-xl text-md text-light">Update your password</h4>

        <div class="mt-7 w-full ">
            <label for="current-password" class="label">Current Password</label>
            <input type="password" name="current-password" id="current-password" placeholder="********" v-model='currentPassword' class="py-1 input text-sm mt-2 font-semibold">
            <span v-for="error in v$.currentPassword.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>
        <div class="mt-3 w-full ">
            <label for="new-password" class="label">New Password</label>
            <input type="password" name="newPassword" placeholder="********"  id="new-password" v-model='password' class="py-1 input text-sm mt-2 font-semibold">
            <span v-for="error in v$.password.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>
        </div>
        <div class="mt-3 w-full ">
            <label for="confirm-password" class="label">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirm-password" placeholder="********" v-model='confirmPassword' class="py-1 input text-sm mt-2 font-semibold">
            <span v-for="error in v$.confirmPassword.$errors" :key="error.$uid" class="text-sm text-red-400 font-semibold">{{ error.$message }}</span>

        </div>
        <span class="text-sm text-red-400 mt-2 font-semibold">{{ serverError }}</span>

        <div class="flex justify-end pr-5 mt-5 mb-5">
            
                <button type="submit" class="px-3 py-1 text-dark bg-gradient-to-r from-brand to to-brand2 rounded-xl">
                    <svg v-if="isLoading" class="animate-spin mx-5 m h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span v-else>Update</span>
                </button>
        </div>
    </form>
    <div class="fixed w-full h-full" v-show="showalert">
        <alert-component :type="alertType" :message="alertMessage"/>
    </div>
</template>

<script>
import { useVuelidate } from '@vuelidate/core'
import { helpers, required, sameAs, minLength } from '@vuelidate/validators'
import alert from "@/mixins/alert";
import alertComponent from "@/Components/alerts/Alert.vue";

export default {
    mixins: [alert],
    components: { alertComponent },
    data(){
        return {
            v$: useVuelidate(),
            currentPassword:'',
            password:'',
            confirmPassword:'',
            isLoading:false,
            serverError:''
        }
    },
    methods:{
        updatePassword(){
            // this.v$.$validate()
            // if(this.v$.$error){
            //     console.log("Not validate");
            //     return;
            // }
            this.isLoading = true
            var data = {
                current_password: this.currentPassword,
                password: this.password,
                password_confirmation: this.confirmPassword,
            }
            axios.put('/api/v1/password', data).then((result) => {
                if (result.status == 200) {
                    this.serverError = ''
                    this.showAlert("password updated successfully", 'success')
                    this.currentPassword = '',
                    this.password = '',
                    this.confirmPassword = ''
                }
                this.isLoading = false
            }).catch((err) => {
                console.warn(err);
                if (err.response.status == 422) {
                    this.serverError = err.response.data.message
                }
                else {
                    this.serverError = "Something went wrong please try again."
                }
                this.isLoading = false
            });
        }
    },

    validations() {
        return {
            currentPassword: {
                required: helpers.withMessage("Current password is requird", required)
            },
            password: {
                required: helpers.withMessage("New password is required", required),
                minLengthValue: minLength(6),
            },
            confirmPassword: {
                required: helpers.withMessage("Confirm your password.", required),
                sameAsPassword: sameAs(this.password)

            },
            
        }
    }

}
</script>

<style>

</style>