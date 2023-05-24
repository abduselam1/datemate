<div wire:ignore x-data="datepicker(@entangle($attributes->wire('model')))"  class=" block w-full">
    <label for="{{$label}}" class=" label">{{$label}}</label>
    
        
    <input id="{{$label}}" x-model="selectedDate" x-ref="mydatepicker" type="text"  class="input mt-2 block border-gray-300 bg-gray-50" />
    @error($attributes->wire('model')->value) <span class="error"> {{$message}} </span> @enderror
</div>

@once

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('datepicker', (model) => ({
                selectedDate: model,
                init(){
                    let date = new Date();
                    let year = date.getFullYear()-18;
                    let month = date.getMonth()-1;
                    var max_date = year +'-'+month
                    flatpickr(this.$refs.mydatepicker,{
                        // dateFormat:"d-m-y",
                        maxDate:max_date
                    })
                },
                reset(){
                    this.selectedDate = null;
                }
            }))
        })
    
    </script>
@endonce