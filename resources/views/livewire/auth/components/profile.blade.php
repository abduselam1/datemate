<div x-data="{imagePreview:null}" class="w-full">
    <div class="flex justify-center mb-5 text-light">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10   ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>

            <h2 class="text-3xl font-bold text-light pl-2">Profile picture</h2>
        </div>
    </div>
    
    <div class="mt-6">
        <div class="block md:mt-0 mt-3 w-full">
            
            <input class="hidden" accept="image/*" id="profile" type="file" x-ref='photo' x-on:change="
                file = $refs.photo.files[0]
                reader = new FileReader()

                reader.onload = (event) => {
                imagePreview = event.target.result
                }

                reader.readAsDataURL(file)
        ">
            <label for="profile" v-if="imagePreview" class="flex cursor-pointer justify-center mt-4">
                <img :src="imagePreview" class="max-w-sm">
            </label>
            <label for="profile" x-show="!imagePreview" class="flex justify-center cursor-pointer py-8 border-2 border-dashed rounded-lg w-full border-gray-400">
                <div class="">
                    <div class="flex flex-col items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-brand">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>

                    </div>
                    <span class="text-center w-full">Please Select a profile picture</span>
                </div>
            </label>
            
            
        </div>
        <div class="mt-5">
            <label for="bio" class="label">Bio</label>
            <textarea class="block input" v-model="bio" id="bio" name="bio" placeholder="Enter your Bio" rows="3" required ></textarea>
        </div>
    </div>
    
    
    <!-- <div class="text-right mt-5 flex justify-between">
        <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','-')">Previous</button>
        <button class="px-4 py-1 bg-brand2 rounded-lg text-dark font-semibold" @click="$emit('changePage','+')" >Next</button>            
    </div> -->
    <div class="mb-4 flex justify-between mt-5">
        <button class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand2 text-white font-bold py-2 px-4 rounded-full" @click.prevent="page = --page">Previous</button>
        <button class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand2 text-white font-bold py-2 px-4 rounded-full " @click.prevent="">Finish</button>
    </div>
</div>