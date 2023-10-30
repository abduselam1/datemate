<template>
    <!-- <span class=" cursor-pointer rounded-full bg-transparent border border-gray-400 h-5 w-10 z-20 flex flex-col justify-center">
        <div class="w-full flex justify-start">
            <span class=" rounded-full h-4 w-4 ml-0.5"></span>
        </div>
    </span>

    <span :class="{'mt-2 transform ease-in-out duration-1000 cursor-pointer rounded-full h-6 w-10 z-20 flex flex-col justify-center':true,'bg-brand':inputValue,'bg-gray-200':!inputValue}" @click="inputValue= !inputValue">
        <div :class="{'w-full ':true,'flex justify-end':inputValue,'flex justify-start':!inputValue}">
            <span :class="{' rounded-full h-4 w-4 ':true,'bg-gray-50 mr-1 ':inputValue,'ml-1 bg-gray-500':!inputValue}"></span>
        </div>
    </span> -->
    <!-- <input type="radio" hidden v-model="inputValue" id=""> -->

    <label :for="label" class="flex items-center justify-center mt-1 space-x-4">
      <div
              class="relative rounded-full focus:outline-none "
              v-cloak
              >
        <div class="w-14 h-7 transition  rounded-full shadow-sm outline-none" :class="{'bg-gray-200':!inputValue,
                                                                                        'bg-brand':inputValue,
                                                                                        }"></div>
        <div
             class="absolute inline-flex items-center justify-center w-5 h-5 transition-all duration-500 ease-in-out transform bg-white rounded-full shadow-sm top-1 left-1"
             :class="{ 'translate-x-0': !inputValue,  
                        'translate-x-7':inputValue,
                        }"
             ></div>
      </div>
    </label>
    <input type="checkbox" name="" class="hidden" v-model="inputValue" @input="updateChange" :id="label">
</template>

<script>
import ModalVue from './Modal.vue';
export default {
    emits: ['update:modelValue'],
    props:{
        modelValue: {
            type:Boolean,
            default:false
        },
        label:{
            type: String,
            default:''
        },
        value:{
            type: Boolean,
            default:false
        }
    },
    created(){
        this.inputValue = this.modelValue
    },
    data() {
        return {
        inputValue: false,
        }
    },
    methods:{
        updateChange(){
            console.log(this.label);
            this.$emit('update:modelValue',!this.inputValue)
        }
    }
    // watch: {
    //     inputValue(newVal) {
    //     this.$emit('input', newVal)
    //     }
    // }
}
</script>

<style>

</style>