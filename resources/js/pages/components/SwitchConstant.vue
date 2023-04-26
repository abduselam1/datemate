<template>
    <label :for="label" class="flex items-center justify-center mt-1 space-x-4">
      <div
              class="relative rounded-full focus:outline-none "
              v-cloak
              >
        <div class="w-14 h-7 transition  rounded-full shadow-sm outline-none" :class="{'bg-gray-200':!value,
                                                                                        'bg-brand':value,
                                                                                        }"></div>
        <div
             class="absolute inline-flex items-center justify-center w-5 h-5 transition-all duration-500 ease-in-out transform bg-white rounded-full shadow-sm top-1 left-1"
             :class="{ 'translate-x-0': !value,  
                        'translate-x-7':value,
                        }"
             ></div>
      </div>
    </label>
</template>

<script>
export default {
    props:{value:Boolean},
    
    methods:{
    }
}
</script>

<style>

</style>