<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User\Language;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    function index()
    {
        return response(Language::get(['id','name']),200);
    }
}
