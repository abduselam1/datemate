<?php

namespace App\Http\Livewire\Auth\Components;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\User\UserInfo;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
// use Intervention\Image\Image;
// use Image;
use Intervention\Image\ImageManagerStatic;

class Profile extends Component
{
    use WithFileUploads;

    public $image;
    public $bio;
    public $data = [];
    public $finished = false;

    public $listeners = ['submitForm'];
    protected $rules = [
        'image' => 'required|file|image',
        'bio' => 'required'
    ];

    protected $messages = [
        'image.required' => 'Please select an image for your profile',
        'image.file' => 'Please select an image file',
        'image.image' => 'Please select a valid image file'
    ];

    public function submit()
    {
        // dd($this->image);
        $this->validate();
        $this->emit('submit');
        $this->finished = true;
    }
    public function prev()
    {
        // dd($this->data);
        $this->emit('pageChange', 2);
    }
    public function submitForm($data)
    {
        $this->data = array_merge($this->data, $data);
    }

    public function finish()
    {
        // dd($this->data);
        $user = auth()->user();
        $userInfo = $user->info()->create([
            'sex' => $this->data['sex'],
            'interested_sex' => $this->data['interested_sex'],
            'bio' => $this->bio,
            'dob' => Carbon::parse($this->data['dob']),
            'religion_id' => $this->data['religion'],
            'job_title' => $this->data['employment'],
            'phone_number' => $this->data['phone_number'],
            'education_level' => $this->data['education'],
            'purpose' => $this->data['purpose'],
        ]);

        $user->languages()->syncWithoutDetaching($this->data['languages']);

        $this->storeUserImage($user);

        return redirect('/');
    }

    public function storeUserImage($user){
        $image = Image::make($this->image)->encode('jpg');
        $img_name = Storage::disk('public')->put(Str::random() . '.jpg', $image);
        $width = $image->width() > 1000 ? $image->width() * 0.3 : $image->width() * 0.1;
        $height = $image->width() > 1000 ? $image->height() * 0.3 : $image->height() * 0.1;

        $image_thumbnail = $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img_thumb = Storage::disk('public')->put(Str::random() . '_thumbnail.jpg', $image_thumbnail);

        $user->pictures()->create([
            'url' => $img_name,
            'thumbnail_url' => $img_thumb,
            'ext' => $image->extension,
            'size' => $image->filesize(),
            'is_primary' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.auth.components.profile');
    }
}
