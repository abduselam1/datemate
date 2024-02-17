<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function suggestion()
    {
        $interested_sex = auth()->user()->info->interested_sex;

        
    }      
}