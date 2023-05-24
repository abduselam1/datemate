<?php

namespace App\Http\Livewire\Auth\Components;

use DateTime;
use Livewire\Component;
use PragmaRX\Countries\Package\Countries;

class Basic extends Component
{
    public $sex;
    public $interested_sex;
    public $country;
    public $city;
    public $dob;
    public $phone_number;

    public $countries;
    public $cities = [];

    
    public $listeners = ['submit'=>'submitForm'];

    protected $rules = [
        'sex'=> 'required',
        'interested_sex' => 'required',
        'country' => 'required',
        'city' => 'required',
        'dob' => 'required|date',
        'phone_number' => 'required'
    ];

    public function submit(){
        
        $this->validate();
        // dd($this->country);

        $this->emit('changePage',2);
    }

    public function submitForm(){
        
        $this->emit('submitForm',[
            'sex' => $this->sex,
            'interested_sex' => $this->interested_sex,
            'country' => $this->country,
            'city' => $this->city,
            'dob' => $this->dob,
            'phone_number' => $this->phone_number,
        ]);
    }

    public function updatedCountry(){
        // dd('helo');
        if($this->country){
            $countries = new Countries();
            $cities = $countries->where('cca3', $this->country)->first()->hydrateCities()->cities->sortBy('name')->pluck('name')->toArray();
            $this->cities = $cities;
            return;
        }
        $this->city = null;
        $this->cities = [];
    }

    public function mount()
    {
        $countries = Countries::all();
        $name = [];
        foreach ($countries as $key => $country) {
            $name[$key] = $country['name']['common'];
        }
        $this->countries = $name;
        // dd($countries['ETH']);

    }

    public function render()
    {
        return view('livewire.auth.components.basic');
    }
}
