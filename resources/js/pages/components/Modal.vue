<template>
    <div class="bg-gray-800 fixed w-screen h-screen flex flex-col justify-center top-0 left-0" style="background:rgba(0,0,0,.6);">
        <div @click="close" class=" bg-white rounded-xl p-8">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    methods:{
        close(){
            this.$emit('close')
        }
    }
}
</script>

<style>

</style>