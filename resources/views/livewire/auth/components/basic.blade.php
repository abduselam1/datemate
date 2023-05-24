<div>
    <div class="w-full h-full " >
        <div class="flex justify-center mb-5">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>
                <h2 class="text-3xl font-bold text-light pl-2">Basic Information</h2>
            </div>
        </div>
        <div class=" mt-3 block md:flex w-full">
            <div class="block w-full mr-2">
                <label for="sex" class=" label">Your sex</label>
                <select wire:model.defer="sex" id="sex" class="input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Select Your sex</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                @error('sex') <span class="error"> {{$message}} </span> @enderror
            </div>
            <div class="block w-full pl-1">
                <label for="Isex" class=" label">Interested sex</label>
                <select wire:model.defer="interested_sex" id="Isex" class="input mt-2 block outline-gray-300 bg-gray-50">
                    <option value="">Select Your preference</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                @error('interested_sex') <span class="error"> {{$message}} </span> @enderror
            </div>
            
        </div>

        <div class=" mt-3 block w-full">
            <label for="phone_number" class="label">Phone number</label>
            <input type="text" wire:model.defer="phone_number" class="input mt-2 block outline-gray-300 bg-gray-50" id="phone_number" placeholder="Phone number">
            @error('phone_number') <span class="error">{{$message}}</span> @enderror
        </div>
        
    
        <div class="mt-3 md:flex block">
    
            <div class="block w-full mr-2">
                <label for="country" class=" label">Country</label>
                <select wire:model="country" id="country" class="input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Choose your country</option>
                    @foreach ($countries as $key => $country)
                        <option value="{{$key}}">{{$country}}</option>
                    @endforeach
                </select>
                @error('country') <span class="error"> {{$message}} </span> @enderror
            </div>
            <div class="block md:mt-0 mt-3 pl-1 w-full">
                <label for="city" class=" label">City</label>
                <select wire:model="city" id="city" class=" input mt-2 block border-gray-300 bg-gray-50">
                    <option value="">Select a city</option>
                    @foreach ($cities as $city)
                        <option value="{{$city}}">{{$city}}</option>
                    @endforeach
                </select>
                @error('city') <span class="error"> {{$message}} </span> @enderror
            </div>
    
        </div>
        <div class="mt-3">
            <x-datepicker label="Date of birth" wire:model="dob" />
            {{-- <x-datepicker label="Date of birth2" /> --}}
            
            
            
        </div>
        <div class="mb-4 flex justify-end mt-5">
            {{-- <x-button text="Next" class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full" /> --}}
            <button wire:click.prevent="submit" class="bg-gradient-to-r from-brand to-brand2 hover:outline-brand text-white font-bold py-2 px-4 rounded-full " >Next</button>
        </div>
        
    </div>
</div>