<template>
    <div class="flex items-center cursor-pointer" @click="changeTab">
        <div class="text-center rounded-full px-3 py-1 font-semibold bg-gray-100 mr-2" :class="{'bg-brand text-white':status,'text-gray-500':!status}">{{step}}</div>
        <span class=" text-sm font-semibold text-gray-500" :class="{'text-light':status}">{{text}}</span>
    </div>
    
  
</template>

<script>
export default {
    props:['status','text','step'],
    methods:{
        changeTab(){
            this.$emit('changeStep',this.step)
        }
    }

}
</script>

<style>

</style>