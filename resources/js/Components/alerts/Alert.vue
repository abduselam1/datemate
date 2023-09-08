<template>

        <component :is="type" :message="message" />

</template>

<script>

import Error from '@/Components/alerts/Error.vue'
import Warning from '@/Components/alerts/Warning.vue'
import Success from '@/Components/alerts/Success.vue'
import Default from "@/Components/alerts/Default.vue";

export default {
    name: "Alert",
    props: {type:{
        default: "default"
        },message:String},
    components: {Error, Warning,Success,Default},

    // created() {
    //     setTimeout( () =>{
    //         this.$emit('close')
    //     },5000)
    // },
    // updated() {
    //     setTimeout( () =>{
    //         this.$emit('close')
    //     },5000)
    // }
}
</script>

<style scoped>

</style>
