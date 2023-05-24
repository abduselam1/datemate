<div>
    <div class="mx-auto sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white mt-16 pt-20">
            <!-- The form field -->
            <form class="mb-10 mx-10" wire:submit.prevent="resetPassword">
                <h2 class=" text-2xl text-light font-bold ">Change your password</h2>
                <!-- <span class="text-gray-500 font-semibold text-sm">You forget your password? No problem lets us know your email address and we will help you recover your account</span> -->

                <div class="my-3">
                    <div class="mb-5">
                        <label for="new-password" class=" text-light font-semibold">New password</label>
                        <input type="password" wire:model.defer="password" id="new-password" ref="new-password" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="********">
                    </div>
                    <div class="mb-3">
                        <label for="re-password" class=" text-light font-semibold">Re-type password</label>
                        <input type="password" wire:model.defer="password_confirmation" id="re-password" ref="new-password" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="********">
                    </div>
                    
                    <div class="mb-3">
                        @error('password') <span class="error">{{$message}}</span> @enderror
                        @error('email') <span class="error">{{$message}}</span> @enderror
                        @error('token') <span class="error">{{$message}}</span> @enderror
                    </div>
                    

                    <x-button text="Change" class="mt-5 mb-10 py-2 w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand" />
                    {{-- <button class="mt-5 mb-10 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">Change</button> --}}
                    



                </div>
                
                
            </form>

    </div>
</div>
