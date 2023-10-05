<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use PragmaRX\Countries\Package\Countries;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries = Countries::all();
        $name = [];
        foreach ($countries as $key => $country) {
            $name[$key] = $country['name']['common'];
        }
        return response($name);
        
    }

    public function show($country){
        
            $countries = new Countries();

            $cities = $countries->where('cca3', $country)->first()->hydrateCities()->cities->sortBy('name')->pluck('name')->toArray();

            return response($cities);
    }
}
