<template>

    <div v-if="multiple">

        <div v-show="focused" @click="focused = false" class="fixed left-0 top-0  w-full h-full bg-gray-300 opacity-0">
    
        </div>
        <div class="relative">
            
            
            <div :class="{'border-brand': focused, 'border-gray-300': !focused}" class=" bg-gray-50 group shadow-sm border-2 rounded-lg">
                
                <div class="px-3 pt-1 flex flex-wrap">
                    <div v-for="value in multipleValue" :key="value['id']" class=" mb-1 mr-1">
                        
                        <div  class="px-2 py-1 bg-brand/20 flex items-center rounded-full text-dark">
                            <span class="text-sm font-semibold text-brand pr-2">{{ value['name'] }}</span>
                            <svg @click="remove(value['id'])" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-brand cursor-pointer"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>


                    </div>
                </div>
                

                <div class="flex items-center ">
                    <input @focus="focused = true" v-model="inputValue"  id="tableSearchInput" placeholder="Select an options" type="text" autocomplete="off" class="block w-full h-9 pl-3 bg-gray-50  outline-none rounded-lg ">
                    <div class="px-2 ">
                        <svg @click="a" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
        
                    </div>
                </div>
                
    
            </div>
            <div v-show="focused" class="absolute overflow-auto shadow-lg rounded-lg w-full max-h-40 bg-white">
                
                <!-- <div v-if="filterItems.length == 0" class="px-5 py-3 cursor-pointer">
                    <span>No options match your search.</span>
                </div> -->
                <div v-for="item in filterItems" :key="item['id'] ?? item" @click="insert(item)" class="px-5 py-3 cursor-pointer hover:bg-gray-200">
                    <span>{{ item['name'] }}</span>
                </div> 
                <div v-if="filterItems.length == 0" class="px-5 py-3">
                    <span>No options match your search</span>
                </div>

            
            </div>
            
        </div>
    </div>
    <div v-else>
        <div class="block w-full mr-2">
            <select @change="updateValue" v-model="value" ref="select" id="employment" class="block rounded-lg mt-2 border-2 border-gray-300 bg-gray-50 px-2 py-2 w-full focus:outline-brand">
                <option value="" selected >Choose an options</option>
            
                    <option v-for="item in items" :key="item['id']" :value="item['id']">{{ item['name'] }}</option>
            </select>

        </div>

    </div>
</template>

<script>
import { integer } from '@vuelidate/validators';
export default {
    mounted(){
        console.log("this.items");
        console.log(this.multipleValue);

    },
    name:"Select2",
    emits: ['update:modelValue'],
    props:{
        modelValue:[String, Array],
        multiple:{
            Boolean,
            default:false,
        },
        items: {
            Array,
            default: [],
        }

    },
    data(){
        return {
            focused: false,
            value:'',
            inputValue:'',
            ids:[],
            multipleValue:[],
        }
    },
    methods:{
        
        insert(item) {

            
            this.multipleValue.push({name:item['name'], id:item['id']})
            this.ids.push(item['id'])
            this.updateValue()

        },

        remove(value){
           let newValue = this.multipleValue.filter((v)=>{
                if(value == v['id'])
                    return false
                return true
            })
            this.multipleValue = newValue;
            
            let newIds = this.ids.filter((v) => {
                if (value == v)
                    return false
                return true
            })
            this.ids = newIds;
            this.updateValue()
        },
        
        updateValue(){
            // console.log(this.value);
            if(this.multiple){
                this.$emit('update:modelValue', this.ids)
            }else{
                this.$emit('update:modelValue', this.value.toString())
            }
        }
    },
    computed:{
        
        filterItems() {
            // return [
            //     { name: "name", id: 3 }
            // ]
            var substring = this.inputValue.trim()

            return this.items.filter((i) =>{
                
                // if(i in this.multipleValue){
                //     return false;
                // }
                
                for (let index = 0; index < this.multipleValue.length; index++) {
                
                    if(this.multipleValue[index]['id'] == i['id']){
                        return false
                    }
                    
                    
                }
                
                const regex = new RegExp(substring,"i");
                const result3 = regex.test(i['name']);
                return result3

            })



        },
    }
}
</script>