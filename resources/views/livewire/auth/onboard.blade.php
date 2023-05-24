<div x-data="{page:@entangle('page')}" class="min-h-screen w-full bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="relative py-3 sm:max-w-xl lg:max-w-2xl w-full sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-brand2 to-blue-50 shadow-lg transform -skew-y-12 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 sm:py-10 sm:px-20">
                <form >
                    <div x-show="page === 1" class="text-light">
                        <!-- page 1 form fields -->
                        <livewire:auth.components.basic  />

                        
                    </div>

                    <div x-show="page === 2">
                        <!-- page 2 form fields -->
                        <livewire:auth.components.personal  />
                        
                    </div>
                    <div x-show="page === 3">
                        <!-- page 2 form fields -->
                        <livewire:auth.components.profile />
                        
                    </div>
                </form>
        </div>
    </div>
    <div class="fixed mr-5 mt-5 top-0 right-0">
        <button wire:click="logout" class=" px-3 py-1 bg-gray-500 text-white font-semibold rounded-2xl">Logout</button>
    </div>
</div>
