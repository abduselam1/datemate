<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\User\Picture;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\PictureRequest;
use Intervention\Image\Facades\Image;
use App\Http\Requests\EditPictureRequest;

class PictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function store(PictureRequest $request)
    {
//        dd($request->picture);
        // $img_name = $request->picture->store('','public');
        // $image = Image::make(public_path('storage/'.$img_name));

        // $thumbnailName = 'storage/thumbnail/' . Str::random(50).'.'.$image->extension;

        // $image->save($thumbnailName,50);


        $photo = $request->picture->store("", 'public');

        $image = Image::make(public_path('storage/' . $photo));

        $ext = $image->extension;
        $size = $image->filesize();

        $image->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $path = substr($photo, 0, strrpos($photo, '.')) . '_thumbnail' . substr($photo, strrpos($photo, '.'));
        $thumbnail = $path;
        $image->save(public_path('storage/' . $path));
        
        $user = User::find(auth()->id());
        
        DB::transaction(function () use ($user,$photo,$ext,$size,$thumbnail) {
            
            $newPicture = Picture::create([
                'url' => $photo,
                'user_id' => $user->id,
                'thumbnail_url' => $thumbnail,
                'ext' => $ext,
                'size' => $size,
            ]);

            $user->pictures()->where('user_id',$user->id)->where('is_primary',true)->update(['is_primary' =>false]);
            $newPicture->update(['is_primary' => true]);
        });

        return response($user->pictures()->orderBy('is_primary','desc')->orderBy('updated_at','desc')->get(),201);

    }

    function destroy(Picture $picture)
    {
        if (count(auth()->user()->pictures) == 1){
            return response(['message' => "You cannot delete all of your profile pictures"],400);
        }
        if($picture->is_primary){
            
            User::find(auth()->id())->pictures()->where('id','!=',$picture->id)->orderBy('id','desc')->first()->update(['is_primary' => true]);
        }

        $picture->delete();
        return response(Picture::where('user_id',auth()->id())->orderBy('is_primary')->orderBy('updated_at','desc')->get(),200);

    }

    public function edit(EditPictureRequest $request ,Picture $picture)
    {

        User::find(auth()->id())->pictures()->where('id','!=',$picture->id)->update(['is_primary' =>false]);

        $picture->update($request->all());

        return response(auth()->user()->pictures,200);


    }
}
