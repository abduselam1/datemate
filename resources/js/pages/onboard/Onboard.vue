<template>
    <div class="mx-auto md:max-w-2xl w-full rounded-xl shadow-md bg-gray-50 sm:mt-16 py-10">
        <div class="w-full overflow-x-scroll whitespace-nowrap  bg-white py-3 flex justify-evenly">
            <div class=" flex ml-36 xs:ml-0 items-center cursor-pointer" @click="changeTab(1)">
                <div class="text-center rounded-full px-3 py-1  font-semibold bg-gray-100 mr-2" :class="{'bg-brand text-white':currentStep == 1,'text-gray-500':1 != currentStep}">1</div>
                <span class=" text-sm font-semibold text-gray-500" :class="{'text-light':currentStep == 1}">Basic</span>
            </div>
            <div class="flex sm:px-0 px-2 items-center cursor-pointer" @click="changeTab(2)">
                <div class="text-center rounded-full px-3 py-1 font-semibold bg-gray-100 mr-2" :class="{'bg-brand text-white':currentStep == 2 ,'text-gray-500': 2 != currentStep}">2</div>
                <span class=" text-sm font-semibold text-gray-500" :class="{'text-light':currentStep == 2 }">Personal</span>
            </div>
            <div class="flex sm:px-0 px-2 items-center cursor-pointer" @click="changeTab(3)">
                <div class="text-center rounded-full px-3 py-1 font-semibold bg-gray-100 mr-2" :class="{'bg-brand text-white':currentStep == 3 ,'text-gray-500':3 !=currentStep}">3</div>
                <span class=" text-sm font-semibold text-gray-500" :class="{'text-light':currentStep == 3 }">Preference</span>
            </div>
            <div class="flex sm:px-0 px-2 items-center cursor-pointer" @click="changeTab(4)">
                <div class="text-center rounded-full px-3 py-1 font-semibold bg-gray-100 mr-2" :class="{'bg-brand text-white':currentStep == 4,'text-gray-500':4!=currentStep}">4</div>
                <span class=" text-sm font-semibold text-gray-500" :class="{'text-light':currentStep == 4}">Profile complition</span>
            </div>
            
        </div>

        <div class="w-full mt-5 bg-white rounded-lg"  >
            <basic v-if="currentStep==1" @change-page='changePage' />
            <personal v-if="currentStep == 2" @change-page='changePage' />
        </div>

    </div>
</template>


<script>
import steps from './steps.vue'
import basic from './components/Basic.vue'
import personal from './components/Personal.vue'
// import basic from './components/Basic.vue'
export default {
  components: { steps ,basic, personal},
  mounted(){
    switch (this.currentStep) {
        case 0:
            this.basic=true
            break;
        case 1:
            this.personal = true
        case 2:
            this.preference = true
        case 1:
            this.profile = true
        
        default:
            break;
    }
  },
  data(){
    return {
        currentStep:1,
        personal:false,
        basic:false,
        preference:false,
        profile:false
    }
  },
  methods:{
    changeTab(step){
        // console.log(step)
        this.currentStep = step
    },
    stepClicked(step){
        this.currentStep = step
        console.log(step);
    },
    changeStep(event){
        this.currentStep = event
        console.log(event);
    },
    changePage(n){
        // console.log(n)
        if (n == '+'){
            this.currentStep +=1
        }else{

            this.currentStep -= 1
        }
        // this.changeStep +=1
    }
  }

}
</script>

<style>

</style>