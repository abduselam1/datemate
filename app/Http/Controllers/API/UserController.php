<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserInfoRequest;
use App\Http\Resources\EducationAndWorkResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\UserResource;
use App\Models\Chat\Conversation;
use App\Models\Chat\Message;
use App\Models\User;
use App\Models\User\Interest;
use App\Models\User\JobTitle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function user()
    {
        // return 'asdf';
        $user = User::find(auth()->id());
        return new UserResource($user);
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
        //        dd($request->id);
        auth()->user()->languages()->sync($request->input('id'));
        return response(auth()->user()->languages);
    }

    function editPurpose(Request $request)
    {

        $request->validate([
            'purpose' => 'required'
        ]);

        auth()->user()->info()->update([
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

        auth()->user()->interests()->sync($request->id);

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

        auth()->user()->info()->update([
            'school' => $request->school,
            'job_title_id' => $request->job_title,
            'company_name' => $request->company
        ]);

        return new EducationAndWorkResource(auth()->user());

    }

    public function editUser(UserInfoRequest $request)
    {

        auth()->user()->info()->update($request->all());

        $user = User::find(auth()->id());

        return new ProfileResource($user);
    }
}
