<template>
    <div @click.exact.self="showOptions = false" class="relative ">
        <div class="">
            <input @focusout="closeOptions"  @focus="showOptions = true"
                   v-model="searchKey" type="search"
                   class="setting-input" >
        </div>
        <div  v-show="showOptions"
             class="absolute top-12 bg-white rounded-lg font-semibold max-h-36 overflow-y-auto left-0 w-full">
            <div v-for="item in dropDownItems()" :key="item" @click="$emit('value',item['id'])"
                 class=" hover:bg-gray-100 cursor-pointer py-1 my-1 px-3">
                <span>{{ item['name'] }}</span>
            </div>



        </div>
    </div>
</template>

<script>
export default {
    name: "Dropdown",
    props:['items'],

    data(){
        return {
            searchKey:'',
            showOptions:false

        }
    },

    methods:{
        closeOptions(){
            setTimeout(()=>{
                if(this.searchKey == ''){
                    this.showOptions = false
                }
            },100)
        },

        search(event){
            console.log(event.target.input)
        },
        dropDownItems(){
            if(this.searchKey == null || this.searchKey == ''){
                return this.items;
            }
            return this.items.filter((item) =>{
                item = item['name'].toLowerCase()
                if(item.startsWith(this.searchKey.toLowerCase()) ||
                    item.endsWith(this.searchKey.toLowerCase())){
                    return true
                }
                return false

            })
            // return ['a','b']
        }
    }
}
</script>

<style scoped>

</style>
