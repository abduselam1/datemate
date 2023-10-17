<template>
    <div class="fixed w-full bottom-3 left-0 z-40  px-3">
        <div class="bg-green-500 w-full text-center rounded-full py-2">
            <span class="text-white ">{{message}}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Success",
    props: ['message'],
}
</script>

<style scoped>

</style>
