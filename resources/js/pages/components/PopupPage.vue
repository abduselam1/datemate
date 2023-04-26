<template>
    <div  class=" z-40 w-screen h-screen fixed left-0 top-0 flex flex-col justify-start items-center" style="background:rgba(0,0,0,.6);" @click.exact.self="close">
            <slot></slot>

    
    </div>

</template>

<script >

// import {ref} from 'vue'
// import useDetectOutsideClick from './composable'
export default {
    // setup(){

    //     const componentRef = ref('componentRef')
    //     const exampleComposableText = ref('')

    //     useDetectOutsideClick(componentRef,() => {
    //         console.log('hello');
    //         // exampleComposableText.value = 'edit hello'
    //     });
    // },
    created(){
        const handleEscape = (e) =>{
            if(e.key == "Esc" || e.key === "Escape"){
                this.$emit('close')
            }
        }

        document.addEventListener('keydown',handleEscape)

        
    },
    data(){
        return {
            searchOpen:true
        }
    },
    methods:{
        close(){
            this.$emit('close')
        }
    }

}
</script>

<style>

</style>