<div>
    <div class="mx-auto sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white mt-16 pt-20">
            <!-- The form field -->
            <form x-data="" class="mb-10 mx-10" wire:submit.prevent="forgot" >
                <h2 class=" text-3xl text-light font-bold ">Forgot password</h2>
                <span x-show="! $wire.isSent" class="text-gray-500 font-semibold text-sm">You forget your password? No problem lets us know your email address and we will help you recover your account</span>
                <div x-show="$wire.isSent" class="relative w-full my-2 rounded-lg bg-green-300 px-3 py-2">
                    <span  class="text-gray-600  font-semibold text-sm">We have sent an email to <span class="text-base">{{$email}}</span><br>Use the email to recover your password</span>
                </div>
                
                <div  class="my-3">
                    <div class="mb-5">
                        <label for="email" class=" text-light font-semibold">Email</label>
                        <input  type="text" wire:model.defer="email" id="email" ref="email" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="john@mail.com">
                        @error('email') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror
                        @error('forgot') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror
                        
                    </div>
                    
                    

                    {{-- <button class="mt-5 mb-10 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">Forgot</button> --}}
                    <x-button text='Forgot' class="mt-5 py-2 mb-10 w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand" />
                </div>
                
                
            </form>

    </div> 
</div>
