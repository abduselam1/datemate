<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\UserSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        
        return UserSetting::where('user_id',auth()->id())->first();
        
    }
    

}
