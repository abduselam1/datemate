<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPictureRequest;
use App\Http\Requests\PictureRequest;
use App\Models\User\Picture;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function store(PictureRequest $request)
    {
//        dd($request->picture);
        $img_name = $request->picture->store('','public');
        $image = Image::make(public_path('storage/'.$img_name));

        $thumbnailName = 'storage/thumbnail/' . Str::random(50).'.'.$image->extension;

        $image->save($thumbnailName,50);

        $newPicture = Picture::create([
            'url' => $img_name,
            'user_id' => auth()->id(),
            'thumbnail_url' => $thumbnailName,
            'ext' => $image->extension,
            'size' => $image->filesize(),
        ]);

        auth()->user()->pictures()->where('id','!=',$newPicture->id)->update(['is_primary' =>false]);

        $newPicture->update(['is_primary' => true]);

        return response(auth()->user()->pictures()->orderBy('updated_at','desc')->get(),201);

    }

    function destroy(Picture $picture)
    {
        if (count(auth()->user()->pictures) == 1){
            return response(['message' => "You cannot delete all of your profile pictures"],400);
        }
        if($picture->is_primary){
            auth()->user()->pictures()->where('id','!=',$picture->id)->orderBy('id','desc')->first()->update(['is_primary' => true]);
        }

        $picture->delete();
        return response(Picture::where('user_id',auth()->id())->orderBy('updated_at','desc')->get(),200);

    }

    public function edit(EditPictureRequest $request ,Picture $picture)
    {

        auth()->user()->pictures()->where('id','!=',$picture->id)->update(['is_primary' =>false]);

        $picture->update($request->all());

        return response(auth()->user()->pictures,200);


    }
}
