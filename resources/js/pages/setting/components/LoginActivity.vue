<template>
    <div class="px-10 relative  bg-white border-x border-b rounded-b-xl pt-5 pb-5 overflow-scroll">
        <h3 class="text-lg font-light text-slate-800">Login Activity</h3>
        <h3 class=" pt-5 text-slate-600">Where You're Logged in</h3>
        

        <div class="mt-5">
            <login-activity-card v-for="session in sessions" :session="session" :current="session.payload == id" :key="session['id']" />
            
        </div>

        <div class=" mt-3 ">
            <button :class="{'opacity-50':sessions == []}" @click="showPassword = true" class="w-full flex justify-center rounded-full py-3 bottom-0 left-0 bg-red-500">
                <span class="text-white text-lg font-ubuntu">Terminate all</span>
            </button>
        </div>
        
    </div>
    <popup-page @close="showPassword = false" v-show="showPassword">
        <div class="sm:mx-auto mx-3 mt-10 max-w-full sm:max-w-xl bg-white px-7 py-10 sm:mt-5 w-full rounded-lg">
            <div>
                <h3 class="label pb-3">Password</h3>
                <input type="password" v-model="password" class="input" placeholder="confirm password">
            </div>
            <span class="error">{{ error }}</span>
            <div class="flex justify-end mt-5">
                <button @click="terminate" class=" rounded-full py-2 px-5 bottom-0 left-0 bg-red-500 text-lg font-ubuntu text-white">
                    <span v-show="!isLoading" class="">Terminate</span>
                    <svg v-show="isLoading" class="animate-spin  mx-8 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </popup-page>
    <div class="fixed w-full h-full" v-show="showalert">
        <alert-component :type="alertType" :message="alertMessage"/>
    </div>
</template>

<script>
import LoginActivityCard from './LoginActivityCard.vue'
import PopupPage from "@/pages/components/PopupPage.vue";
import alert from "@/mixins/alert";
import alertComponent from "@/Components/alerts/Alert.vue";

export default {
    components:{LoginActivityCard,PopupPage,alertComponent},
    mixins:[alert],
    mounted(){
        axios.get('/api/v1/sessions').then((result) => {
            console.log(result);
            
            this.sessions = result.data.sessions
            this.id = result.data.id
            this.isLoading = false
                
        }).catch((err) => {
            console.warn(err);
        });
    },
    data(){
        return {
            sessions:[],
            id:'',
            isLoading:false,
            showPassword:false,
            password:'',
            error:''
        }
    },
    methods:{
        terminate(){
            
            if(this.isLoading){
                return;
            }
            if(this.password == ''){
                this.error = "Please provide your password"
                return
            }
            this.isLoading = true
            axios.post('/api/v1/sessions',{password:this.password}).then((result) => {
                if(result.status == 200){
                    this.sessions = result.data.sessions
                    this.id = result.data.id
                    this.error = ''
                    this.showPassword= false
                    this.showAlert("Sessions terminated successfully",'success')
                    
                }
                this.isLoading = false
            }).catch((err) => {
                console.log(err);
                this.error = err.response.data.message
                this.isLoading = false
            });
        }
    }
}
</script>

<style>

</style>