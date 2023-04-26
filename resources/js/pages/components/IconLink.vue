<template>
    <div class="relative mr-3  " :class="{'-mt-5':to}">
        <router-link v-if="to" :to="to" class=" p-1">
            <slot></slot>
        </router-link>
        <div v-else class="">
            <slot></slot>
        </div>
        <div v-show="count != 0" :class="{'mt-5':to}" class="absolute top-0 right-0 flex justify-end px-1 text-white bg-brand text-xs rounded-full">
            <h4>{{count}}</h4>
        </div>
    </div>
  
</template>

<script>
export default {
    props:['to','class','count']
}
</script>

<style>

</style>