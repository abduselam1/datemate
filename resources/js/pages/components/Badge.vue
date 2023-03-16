<template>
    <div class="px-3 py-0.5 rounded-full font-semibold text-sm bg-gray-200 text-gray-800 mr-2 mt-2" :class="{'bg-red-500/20 text-red-500': type == 'danger','bg-green-500/10  text-green-500':type=='success','bg-brand/20 text-brand':type=='brand','bg-brand2/20 text-brand2':type=='brand2'}">
        {{text}}
    </div>

    <!-- dark feature added -->
    <!-- <div class="px-3 py-0.5 rounded-full font-semibold text-sm bg-gray-200 dark:bg-gray-700 dark:text-gray-300 text-gray-800 mr-2 mt-2" :class="{'bg-red-500/20 text-red-500': type == 'danger','bg-green-500/10  text-green-500':type=='success','bg-brand/20 text-brand':type=='brand','bg-brand2/20 text-brand2':type=='brand2'}">
        {{text}}
    </div> -->
    
</template>

<script>
export default {
    props:['text','type']
}
</script>

<style>

</style>