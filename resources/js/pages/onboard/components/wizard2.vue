<template>
  <div v-cloak class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-12 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
      <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <form @submit.prevent="submitForm">
          <div v-show="page === 1">
            <!-- page 1 form fields -->
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
              </label>
              <input
                v-model="formData.name"
                :class="{ 'border-red-500': $v.formData.name.$error }"
                :aria-invalid="$v.formData.name.$error ? 'true' : 'false'"
                type="text"
                id="name"
                name="name"
                placeholder="Enter your name"
                required
              />
              <div v-if="!$v.formData.name.required" class="text-red-500 text-sm mt-1">
               Name is required.
            </div>
</div>
<div class="mb-4">
<label class="block text-gray-700 font-bold mb-2" for="email">
Email
</label>
<input
             v-model="formData.email"
             :class="{ 'border-red-500': $v.formData.email.$error }"
             :aria-invalid="$v.formData.email.$error ? 'true' : 'false'"
             type="email"
             id="email"
             name="email"
             placeholder="Enter your email address"
             required
           />
            <div v-if="!$v.formData.email.required" class="text-red-500 text-sm mt-1">
            Email is required.
            </div>
            <div v-else-if="!$v.formData.email.email" class="text-red-500 text-sm mt-1">
            Please enter a valid email address.
            </div>
            </div>
            <div class="flex justify-end">
            <button @click.prevent="nextPage" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Next
            </button>
            </div>
            </div>
            <div v-show="page === 2">
<!-- page 2 form fields -->
<div class="mb-4">
<label class="block text-gray-700 font-bold mb-2" for="phone">
Phone
</label>
<input
             v-model="formData.phone"
             :class="{ 'border-red-500': $v.formData.phone.$error }"
             :aria-invalid="$v.formData.phone.$error ? 'true' : 'false'"
             type="tel"
             id="phone"
             name="phone"
             placeholder="Enter your phone number"
             required
           />
<div v-if="!$v.formData.phone.required" class="text-red-500 text-sm mt-1">
Phone number is required.
</div>
<div v-else-if="!$v.formData.phone.phone" class="text-red-500 text-sm mt-1">
Please enter a valid phone number.
</div>
</div>
<div class="flex justify-between">
<button @click.prevent="prevPage" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
Previous
</button>
<button @click.prevent="nextPage" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
Next
</button>
</div>
</div>
<div v-show="page === 3">
<!-- page 3 form fields -->
<div class="mb-4">
<label class="block text-gray-700 font-bold mb-2" for="message">
Message
</label>
<textarea
             v-model="formData.message"
             :class="{ 'border-red-500': $v.formData.message.$error }"
             :aria-invalid="$v.formData.message.$error ? 'true' : 'false'"
             id="message"
             name="message"
             placeholder="Enter your message"
             rows="4"
             required
           ></textarea>
<div v-if="!$v.formData.message.required" class="text-red-500 text-sm mt-1">
Message is required.
</div>
</div>
<div class="flex justify-between">
    <button @click.prevent="prevPage" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Previous</button>
    <button @click.prevent="prevPage" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Previous</button>
</div>
</div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
// import { required, email, phone } from '@vuelidate/validators';
import { useVuelidate } from '@vuelidate/core'
import { required, email } from '@vuelidate/validators'

export default {
    setup () {
        return { $v: useVuelidate() }
    },
  data() {
    return {
        
      page: 1,
      formData: {
        name: '',
        email: '',
        phone: '',
        message: ''
      }
    };
  },
  validations(){
    return {
        formData: {
            name: { required },
            email: { required, email },
            phone: { required },
            message: { required }
    }
    }
  },
  methods: {
    nextPage() {
      if (true) {
        this.$v.$touch;
        return;
      }
      this.page++;
    },
    prevPage() {
      this.page--;
    },
    submitForm() {
      if (this.$v.$invalid) {
        this.$v.$touch();
        return;
      }
      // Submit form data here
      console.log(this.formData);
    }
  }
};
</script>