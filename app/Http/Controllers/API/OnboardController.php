<?php

namespace App\Http\Controllers\Api;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\User\JobTitle;
use App\Models\User\Language;
use App\Models\User\Religion;
use App\Http\Controllers\Controller;
use App\Http\Requests\OnboardRequest;
use App\Http\Resources\ProfileResource;
use PragmaRX\Countries\Package\Countries;
use Intervention\Image\ImageManagerStatic as Image;


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

    public function store(OnboardRequest $request)
    {
        
        $user = User::find(auth()->id());
        $userInfo = $user->info()->create([
            'sex' => $request->sex,
            'interested_sex' => $request->interested_sex,
            'bio' => $request->bio,
            'dob' => Carbon::parse($request->date_of_birth),
            'religion_id' => $request->religion,
            'job_title_id' => $request->job_title,
            'phone_number' => $request->phone_number,
            'education_level' => $request->education,
            'purpose' => $request->purpose,
        ]);

        $user->languages()->sync(explode(',', $request->languages));

        $photo = $request->image->store("", 'public');

        $image = Image::make(public_path('storage/' . $photo));

        $ext = $image->extension;
        $size = $image->filesize();

        $image->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $path = substr($photo, 0, strrpos($photo, '.')) . '_thumbnail' . substr($photo, strrpos($photo, '.'));
        $thumbnail = $path;
        $image->save(public_path('storage/' . $path));
        
        $user->pictures()->create([
            'url' => $photo,
            'thumbnail_url' => $thumbnail,
            'ext' => $ext,
            'size' => $size,
            'is_primary' => true,
        ]);

        return response(new ProfileResource($user),201);

    }

}
