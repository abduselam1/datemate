<template>
    <div  ref="snackbar" class="fixed w-full bottom-12 sm:bottom-3 z-40 px-3">
        <div
            class="bg-red-500 w-full text-center rounded-full py-1 md:py-2 max-w-sm lg:max-w-xl xl:max-w-3xl mx-auto">
            <span class="text-white ">{{message ?? "Something went wrong please try again."}}</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "Error",
    props: ['message']
}
</script>

<style scoped>

</style>
