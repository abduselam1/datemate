<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Chat\Message;
use Illuminate\Http\Request;
use App\Models\User\Interest;
use App\Models\User\JobTitle;
use App\Models\User\Language;
use App\Models\Chat\Conversation;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserInfoRequest;
use App\Http\Resources\ProfileResource;
use PragmaRX\Countries\Package\Countries;
use App\Http\Resources\EducationAndWorkResource;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function user()
    {
        
        $user = User::find(auth()->id());

        return new ProfileResource($user);
    }

    public function getProfile()
    {
        $user = User::find(auth()->id());
        
        return new ProfileResource($user);
        

    }

    public function editLanguage(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);
        $user = User::find(auth()->id());
        $user->languages()->sync($request->input('id'));
        return response(auth()->user()->languages);
    }

    function editPurpose(Request $request)
    {

        $request->validate([
            'purpose' => 'required'
        ]);
        $user = User::find(auth()->id());
        $user->info()->update([
            'purpose' => $request->purpose
        ]);

        return response(true);
    }


    public function interestIndex(){

        $interest = Interest::orderBy('name')->get();

        return response($interest);
    }

    public function editInterest(Request $request){
        $request->validate([
            'id' => 'required'
        ]);

        $user = User::find(auth()->id());
        $user->interests()->sync($request->id);

        return response(true);
    }

    public function jobTitleIndex(){

        $title = JobTitle::orderBy('name')->get();

        return response($title);
    }

    function religionIndex()
    {
        $religions = User\Religion::orderBy('name')->get();

        return response($religions);
    }

    public function editEducationAndWork(Request $request){

        $request->validate([
            'job_title' => 'sometimes',
            'school' => 'sometimes',
            'company' => 'sometimes',
        ]);
        $user = User::find(auth()->id());
        $user->info()->update([
            'school' => $request->school,
            'job_title_id' => $request->job_title,
            'company_name' => $request->company
        ]);

        return new EducationAndWorkResource(auth()->user());

    }

    public function editUser(UserInfoRequest $request)
    {
        $user = User::find(auth()->id());

        $user->info()->update($request->all());

        $user = User::find(auth()->id());

        return new ProfileResource($user);
    }

    public function init()
    {
        $title = JobTitle::orderBy('name')->get();

        $religions = User\Religion::orderBy('name')->get();

        $languages = Language::get(['id','name']);

        $countries = Countries::all();
        $name = [];
        foreach ($countries as $key => $country) {
            $name[$key] = $country['name']['common'];
        }
        return response([
            'jobTitles' => $title,
            'religions' => $religions,
            'languages' => $languages,
            'countries' => $name
        ]);
        
    }
}
