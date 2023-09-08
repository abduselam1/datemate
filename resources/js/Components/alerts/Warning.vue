<template>
    <div ref="snackbar" class="fixed w-full bottom- 3 z-40  px-3">
        <div class="bg-yellow-500 w-full text-center rounded-full py-2">
            <span class="text-white ">{{message}}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Warning",
    props: ['message']
}
</script>

<style scoped>

</style>
