<?php

namespace App\Http\Controllers\Api;

use DateTime;
use Illuminate\Http\Request;
use App\Models\User\JobTitle;
use App\Models\User\Language;
use App\Models\User\Religion;
use App\Http\Controllers\Controller;
use PragmaRX\Countries\Package\Countries;

class OnboardController extends Controller
{

    public function create()
    {

        $countries = Countries::all();
        $name = [];
        foreach ($countries as $key => $country) {
            $name[$key] = $country['name']['common'];
        }
        $allLanguages = Language::select('id', 'name')->get();

        $religions = Religion::all();

        $jobTitles = JobTitle::orderBy('name')->get();

        return response([
            'countries'     => $name,
            'languages'     => $allLanguages,
            'religions'     => $religions,
            'job_titles'    => $jobTitles,
        ]);

    }

    public function store(Request $request)
    {

    }

}
