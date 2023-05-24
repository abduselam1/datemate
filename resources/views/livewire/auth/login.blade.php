<div class="mx-auto md:max-w-4xl sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white sm:mt-16">
    <div class="grid md:grid-cols-2 grid-cols-1">
        <!-- The form field -->
        <form class="mt-20 mb-10 mx-10" wire:submit.prevent="login">
            <h2 class=" text-3xl text-light font-bold">Welcome Back</h2>
            <span class="text-gray-600 font-semibold text-sm">Please sign in to your account</span>

            <div class="my-3">
                <div class="mb-3">
                    <label for="email" class=" text-light font-semibold">Email</label>
                    <input type="text" wire:model.defer="email" name="email" id="email" ref="email" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="john.doe@email.com">
                    @error('email') <span class="text-sm text-red-400 font-semibold">{{ $message }}</span> @enderror
                </div>
                <div class="mb-2">
                    <label for="password" class=" text-light font-semibold">Password</label>
                    <input type="password" wire:model.defer="password" name="password" id="password" ref="password" class="input block mt-3 px-3 py-1 text-gray-800 w-full" placeholder="********">
                    @error('password') <span class="text-sm text-red-400 font-semibold">{{ $message }}</span> @enderror

                </div>
                
                <div class="flex justify-between mt-2">
                    <div>
                        <input type="checkbox" wire:model="remember" name="remember" class="text-brand bg-brand" id="remember">
                        <label for="remember" class="pl-3 font-semibold text-light">Remember me</label>
                    </div>
                    <div>
                        <a href="{{route('forgot-password')}}" class="focus:outline-brand p-1 rounded-lg text-brand font-semibold text-sm">Forgot password?</router-link>
                    </div>
                </div>
                @error('credential') <span class="text-sm text-red-400 font-semibold">{{ $message }}</span> @enderror


                
                <button class="mt-5 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">
                    <svg wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span wire:loading.remove>Sign in</span>
                </button>
                
            </div>
            <!-- <div class="flex justify-evenly content-start items-start">
                <p class="text-start">______________</p>
                <p class="text-end">Or</p>
                <p class="text-start">_______________</p>
            </div> -->
            <!-- <div class="flex items-center justify-center space-x-2">
                <span class="h-px w-16 bg-gray-200"></span>
                <span class="text-gray-300 font-normal">or continue with</span>
                <span class="h-px w-16 bg-gray-200"></span>
            </div> -->
            <div class="flex justify-center">
                <span class="text-center text-gray-400 font-semibold text-sm">Don't have and Account? <a href="{{route('register')}}" class=" text-brand" >Register</a></span>
            </div>
        </form>


        <!-- The picture to the left -->
        <div class=" md:block hidden overflow-hidden rounded-r-lg">
            <img src="/media/auth.jpg" class="h-full object-cover " alt="">
        </div>

    </div>

</div>
