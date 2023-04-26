<template>
    <div class="sm:hidden fixed top-0 left-0 w-full py-3 z-50 bg-gray-50 items-center flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span class=" text-lg text-slate-700 px-3">{{title}}</span>
    </div>
</template>

<script>
export default {
    props:{title:String}
}
</script>

<style>

</style>