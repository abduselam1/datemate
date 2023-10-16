<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\SessionService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember ?? false)) {
            SessionService::createSession($request->ip);
            $user = User::find(auth()->id());
            return response( [
                'user' => $user->info ? new ProfileResource($user): $user,
                'info' =>$user->info
            ]);
        } else {
            return response(['message' => "The credential do not match our records"],422);
        }

    }

    public function register(Request $request)
    {
        // return response($request->ip(),500);
        $request->validate([
                'name' => ['required'],
                'last_name' => ['required'],
                'email' => ['required', 'email','unique:users'],
                'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]

            ],
            [
                'name.required' => 'Please fill your name',
                'last_name.required' => 'Please fill your last name',
                'email.required' => 'Email is required',
                'email.email' => 'Please provid a valid email address',
                'email.unique' => 'This email is already taken',
                'password.required' => 'Password is required',
                'password.min' => 'Password length should be atleast 8 character',
            
            ]
        );
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        SessionService::createSession($request);

        return response(new ProfileResource($user),201);


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
