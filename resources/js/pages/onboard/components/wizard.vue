<template>
    <div class="min-h-screen w-full bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="relative py-3 sm:max-w-xl lg:max-w-2xl w-full sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-brand2 to-blue-50 shadow-lg transform -skew-y-12 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 sm:py-10 sm:px-20">
                    <form @submit.prevent="submit">
                        <keep-alive>
                            <component @next-page="nextPage" @prev-page="prevPage" :is="components[page]"></component>
                    
                        </keep-alive>
                        <span class="text-sm text-red-400 font-semibold">{{ serverError }}</span>

                        <div v-if="isFinalState" class="flex justify-center mt-5">
                            <button type="submit" class=" cursor-pointer bg-gradient-to-r from-brand to-brand2 hover:outline-brand2 text-white font-bold py-3 px-4 rounded-full " >
                                <div v-if="isLoading">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </div>
                                <span v-else>Submit</span>
                            
                            </button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import basic from './Basic.vue'
import personal from './Personal.vue'
import profile from './profile.vue'
export default {
    components:{basic,personal,profile},
  
    data() {

        return {
            page: 0,
            checkin:'',
            data:{},
            components:['basic','personal','profile'],
            isFinalState:false,
            isLoading:false,
            serverError:''
        
        }
    },
  
  
  methods: {
    
    
    nextPage(data) {
      this.data = {
        ...this.data,
        ...data
      }
      console.log(this.data);
      if(this.page == 2){
        this.isFinalState = true
      }else{
          this.page += 1;
      }
    },
    prevPage() {
      this.page -= 1;
    },
    submit(){
        this.isLoading = true;
        var data = this.processData()
        axios.post('/api/v1/onboard',data).then((result) =>{
            console.log(result);
            if (result.status == 201) {
                this.user = result.data
                this.$router.push({ name: 'home', replace: true })
            }



            this.isLoading = false;
        }).catch((err) => {

            if (err.response.status == 422) {
                this.serverError = err.response.data.message
            }
            else {
                this.serverError = "Something went wrong please try again"
            }
            this.isLoading = false;
        })
        console.log(this.data);
    },

    processData(){
        const data = new FormData;
        data.append('image', this.data.image)
        data.append('sex', this.data.sex)
        data.append('date_of_birth', this.data.dateOfBirth)
        data.append('interested_sex', this.data.interestedSex)
        data.append('country', this.data.country)
        data.append('city', this.data.city)
        data.append('languages', this.data.languages)    
        data.append('religion', this.data.religion)
        data.append('education', this.data.education)
        data.append('job_title', this.data.job_title)
        data.append('purpose', this.data.purpose)
        data.append('bio', this.data.bio)

        return data;
    }
  },

}
</script>


<style scoped>

</style>
