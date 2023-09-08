<template>
    <div class="border-b pb-5 ">
        <div class="flex justify-between items-baseline">
            <div>
                <p class="mt-5 w-full text-3xl font-semibold text-slate-800">{{profile.name+' '+profile.last_name}},<span class="text-xl font-semibold text-gray-600"> {{profile.age}}</span></p>
            </div>
            <div >
                <router-link :to="{name:'setting'}" class="px-4 py-2 rounded-full font-semibold text-light hover:bg-gray-300 border border-gray-400">
                    Edit profile
                </router-link>
            </div>
        </div>

        <div class="flex w-full  mt-2">
            <badge :text="profile.sex" :type="'brand2'"  />
            <badge :text="'Age '+ profile.age" :type="'brand'"  />
        </div>
    </div>

</template>

<script>
import badge from "@/pages/components/Badge.vue";

export default {
    name: "Name",
    components: {badge},
    props:['profile']

}
</script>

<style scoped>

</style>
