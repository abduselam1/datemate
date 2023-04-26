<template>
    <div class="px-10  bg-white border-x border-b rounded-b-xl pt-5 pb-5 overflow-scroll">
        <h3 class="text-lg font-light text-slate-800">Login Activity</h3>
        <h3 class=" pt-5 text-slate-600">Where You're Logged in</h3>
        

        <div class="mt-5">
            <login-activity-card />
            <login-activity-card />
            <login-activity-card />
            <login-activity-card />
            <login-activity-card />
            <login-activity-card />
            
        </div>
        
    </div>
</template>

<script>
import LoginActivityCard from './LoginActivityCard.vue'

export default {
    components:{LoginActivityCard}
}
</script>

<style>

</style>