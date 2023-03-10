<template>
    <div class="min-h-screen w-full bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="relative py-3 sm:max-w-xl lg:max-w-2xl w-full sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-brand2 to-blue-50 shadow-lg transform -skew-y-12 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 sm:py-10 sm:px-20">
                    <form>
                        <div v-show="page === 1" class="text-light">
                            <!-- page 1 form fields -->
                            <basic @next-page='nextPage' />

                            
                        </div>

                        <div v-show="page === 2">
                            <!-- page 2 form fields -->
                            <personal @next-page='nextPage' @prev-page='prevPage' />
                            
                        </div>
                        <div v-show="page === 3">
                            <!-- page 2 form fields -->
                            <profile @prev-page='prevPage' @finish='finish' />
                            
                        </div>
                    </form>
            </div>
        </div>
    </div>
</template>

<script>
import basic from './Basic.vue'
import personal from './Personal.vue'
import profile from './ProfilePicture.vue'
export default {
  components:{basic,personal,profile},
  
  data() {
    return {
      page: 1,
      showPicker: false,
      selectedDate: null,
      checkin:''
    }
  },
  
  methods: {
    
    
    nextPage() {
      this.page += 1;
    },
    prevPage() {
      this.page -= 1;
    },
    finish(){
        console.log('hello');
    }
  },

}
</script>


<style scoped>

</style>
