
    <div class=" mx-auto md:max-w-4xl sm:max-w-lg max-w-md w-full rounded-xl shadow-md bg-white sm:mt-10">
        <div class="grid md:grid-cols-2 grid-cols-1">
            <!-- The form field -->
            <form class="mt-16 mb-5 mx-10" wire:submit.prevent="register">
                <h2 class=" text-3xl text-light font-bold">Welcome to {{config('app.name')}}</h2>
                <span class="text-gray-600 font-semibold text-sm">Please create account to continue</span>

                <div class="my-3">
                    <div class="mb-2">
                        <label for="name" class=" text-light font-semibold">Name</label>
                        <input type="text" wire:model="name" id="name" ref="name" class="input block mt-3 px-3  text-gray-800 w-full" placeholder="Name">
                        @error('name') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label for="Last name" class=" text-light font-semibold">Last Name</label>
                        <input type="text" wire:model="last_name" id="Last name" ref="Last name" class="input block mt-3 px-3  text-gray-800 w-full" placeholder="Last Name">
                        @error('last_name') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror

                    </div>

                    <div class="mb-2">
                        <label for="email" class=" text-light font-semibold">Email</label>
                        <input type="text" wire:model="email" id="email" ref="email" class="input block mt-3 px-3 text-gray-800 w-full" placeholder="john@mail.com">
                        @error('email') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror

                    </div>

                    <div class="mb-2">
                        <label for="password" class=" text-light font-semibold">Password</label>
                        <input type="password" wire:model="password" id="password" ref="password" class="input block mt-3 px-3 pt-1 text-gray-800 w-full" placeholder="********">
                        @error('password') <span class="text-sm text-red-400 font-semibold">{{$message}}</span> @enderror

                    </div>
                    
                    {{-- <livewire:components.button text='Register' class="mt-3 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand" /> --}}
                    {{-- <button class="mt-3 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">Sign in</button> --}}
                    <button class="mt-5 py-2 text-center w-full rounded-xl bg-gradient-to-r from-brand to-brand2 text-white focus:outline-brand">
                        <svg wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span wire:loading.remove>Register</span>
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
                    <span class="text-center text-gray-400 font-semibold text-sm">Already have an Account? <a href="{{route('login')}}" class=" text-brand" >Login</a></span>
                </div>
            </form>


            <!-- The picture to the left -->
            <div class="md:block hidden overflow-hidden rounded-r-lg">
                <img src="/media/auth.jpg" class="h-full object-cover " alt="">
            </div>

        </div>

    </div>

