<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('logout');
    }

    public function logout(){
        try {
            Auth::logout();
    
            session()->invalidate();
            session()->regenerateToken();
            return new JsonResponse(true);
        } catch (\Throwable $th) {
            return new JsonResponse(false,500);
        }
    }
}
