export default {
    data(){
        return {
            alertType:null,
            alertMessage:'',
            showalert:false
        }
    },
    methods:{
        showAlert(message,type='default'){
            this.alertMessage = message
            this.alertType = type
            this.showalert = true
            setTimeout(()=>{
                this.alertMessage = ""
                this.alertType = ''
                this.showalert = false
            },5000)
        }
    }
}
