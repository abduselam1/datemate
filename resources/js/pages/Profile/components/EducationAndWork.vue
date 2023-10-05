<template>
    <div class=" border-b py-7 ">
        <div class="flex group cursor-pointer items-center">
            <p class="text-light font-bold text-xl ">Education and Work</p>

            <div @click="showEdit = !showEdit" class="lg:hidden group-hover:block pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-gray-600 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </div>
        </div>


        <div v-show="! showEdit">
            <div class="flex text-gray-700 mt-1 text-sm" v-if="newJobTitle != null || company != null">
                <span v-if="company == null">{{ title }}</span>
                <span v-else-if="newJobTitle == null">{{ company }}</span>
                <span v-else >{{ title}} <span class="font-semibold px-0.5">at</span> {{company}}</span>
            </div>
            <div v-if="school != null" class="pt-1 text-sm font-semibold text-gray-500">
                <span>Went to <span class="font-bold text-gray-600">{{ school }}</span></span>
            </div>

            <div v-if="newJobTitle == null && company == null && school == null" class="mt-3">
                <span class="text-sm text-gray-500">Tell people more about your self by adding your work and education details</span>
                <div class="flex">
                    <div class="flex items-center px-5 cursor-pointer hover:bg-gray-100 py-2 mt-2 border border-gray-300 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <div class="ml-2">
                            <span class="text-sm font-semibold text-gray-800">Add now</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="cursor-pointer" v-else-if="newJobTitle == null">
                <span class="text-brand text-sm " @click="showEdit = true" >Add Your Work</span>
            </div>
            <div class="cursor-pointer" v-else-if="school == null">
                <span class="text-brand text-sm " @click="showEdit = true" >Add Your Education</span>
            </div>


        </div>

        <form @submit.prevent="save" v-show="showEdit" class="mt-3 " >
            <div class=" pt-2 grid  md:grid-cols-5 gap-2 items-center ">
                <span class="col-span-2">Job Title</span>
                <select v-model="newJobTitle" class=" col-span-3 setting-input">
                    <option value="">Select your job title</option>

                    <option v-for="jobTitle in jobTitles" :value="jobTitle['id']">{{ jobTitle['name'] }}</option>

                </select>
            </div>
            <div class=" pt-2 grid md:grid-cols-5 gap-2 items-center ">
                <span class="col-span-2">Company name</span>
                <input v-model="company" class=" col-span-3 text-gray-600 outline-none border border-gray-200 focus:border-brand rounded-lg px-2 py-2 " >
            </div>
            <div class=" pt-2 grid md:grid-cols-5 gap-2 items-center ">
                <span class="col-span-2 col">School or university</span>
                <input v-model="school" class=" col-span-3 text-gray-600 outline-none border border-gray-200 focus:border-brand rounded-lg px-2 py-2 " >
            </div>

            <span v-show="errorMessage!=''" class="text-red-500 text-sm font-semibold" >{{errorMessage}}}</span>

            <div class=" mt-2 flex justify-end">
                <button class="px-5 py-1 rounded-full text-white bg-brand"><span v-if="isLoading">Saving ...</span> <span v-else>Save</span></button>
            </div>
        </form>


    </div>
</template>

<script>
export default {
    name: "EducationAndWork",

    props:['data'],

    mounted() {
        this.school = this.data['school']
        this.company = this.data['company']
        this.newJobTitle = this.data['job_title_id']
        this.title = this.data['job_title']
        axios.get('/api/v1/job-title')
            .then((result) => {
               this.jobTitles = result.data
            })
            .catch((err) =>{

            });
    },

    data(){
        return {
            showEdit:false,
            jobTitles:null,
            title:'',
            newJobTitle:'',
            company:'',
            school:'',
            isLoading:false,
            errorMessage:''
        }
    },

    methods:{
        save(){
            this.isLoading = true

            axios.put('/api/v1/user/education-and-work',{job_title:this.newJobTitle,company:this.company,school:this.school})
                .then((result)=>{
                    console.log(result.data)
                    this.school = result.data.data['school']
                    this.company = result.data.data['company']
                    this.newJobTitle = result.data.data['job_title_id']
                    this.title = result.data.data['job_title']
                    this.isLoading = false
                    this.showEdit = false;
                })
                .catch((err)=>{

                    this.school = this.data['school']
                    this.company = this.data['company']
                    this.newJobTitle = this.data['job_title_id']
                    this.title = this.data['job_title']
                    this.isLoading = false
                    this.errorMessage="Something went wrong please try again"
                    setTimeout(()=>{
                        this.errorMessage=''
                    },5000)
                })
        }
    }
}
</script>

<style scoped>

</style>
