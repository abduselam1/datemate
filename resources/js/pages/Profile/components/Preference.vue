<template>
    <div class=" py-7 ">
        <div class="flex group cursor-pointer items-center">
            <div class="flex items-center">

                <p class="text-light font-bold text-xl  pr-1">Preference  </p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-amber-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0" />
                </svg>

            </div>

            <div @click="toggleEdit" class="lg:hidden group-hover:block pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>
        <div class="mt-3">
            <span class="text-sm text-gray-500">
                Filter out what type of person you need to meet.<br> What personality do you like the most on your mate? What are your turn on and turn of behaviors?
            </span>
        </div>

        <div class="mt-5 ">

            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Sexuality:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">I'm Straight</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Star sign:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">Leo</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">appearance:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">Add info</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Smoking:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">Not at all</span>
                </div>
            </div>
            <div class="flex font-semibold text-sm py-2">
                <div class="w-1/3   ">
                    <span class=" text-gray-800">Drinking:</span>
                </div>
                <div class="w-full">
                    <span class="text-gray-500">Often</span>
                </div>
            </div>



        </div>


    </div>


</template>

<script>
export default {
    name: "Preference",

    data(){
        return {
            showEdit:false
        }
    },

    methods:{
        toggleEdit(){
            if(this.showEdit == true){
                this.showEdit = false
                return
            }

            axios.get('')

        }
    }
}
</script>

<style scoped>

</style>
