<?php

use App\Http\Controllers\Api;
// use App\Http\Controllers\Api\PictureController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Events\NewMessageHasRecievedEvent;
// use App\Http\Controllers\Api\Auth\AuthenticationController;
// use App\Http\Controllers\Api\CountryController;
// use App\Http\Controllers\Api\UserController;
// use App\Http\Controllers\Api\MessageController;
// use App\Http\Controllers\Api\OnboardController;
// use App\Http\Controllers\Api\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'],function(){

    Route::group(['middleware'=>'auth'],function (){
    
        Route::get('onboard',[Api\OnboardController::class,'create']);
    
        Route::post('onboard',[Api\OnboardController::class,'store']);
    
        Route::get('logout',[Api\Auth\AuthenticationController::class,'logout']);
    
        Route::get('user',[Api\UserController::class,'user']);
    
        Route::get('messages-count',[Api\MessageController::class,'countMessages']);
    
        Route::get('get-profile',[Api\UserController::class,'getProfile']);
    
    
        Route::post('picture',[Api\PictureController::class,'store'])->name('picture.store');
    
        Route::delete('picture/{picture}',[Api\PictureController::class,'destroy'])->name('picture.delete');
    
        Route::put('picture/{picture}',[Api\PictureController::class,'edit'])->name('picture.edit');
    
        Route::put('user/language', [Api\UserController::class, 'editLanguage']);
    
        Route::put('user/purpose', [Api\UserController::class, 'editPurpose']);
    
        Route::put('user/interest',[Api\UserController::class,'editInterest']);
    
        Route::put('user/education-and-work',[Api\UserController::class,'editEducationAndWork']);

        Route::put('edit-profile',[Api\UserController::class,'editProfile']);

        Route::put('password',[Api\UserController::class, 'passwordChange']);
    
        Route::put('user/info',[Api\UserController::class,'editUser']);
    
        Route::get('interests',[Api\UserController::class,'interestIndex']);

        Route::get('sessions',[Api\Auth\AuthenticationController::class,'sessions']);

        Route::post('sessions',[Api\Auth\AuthenticationController::class,'sessionDestroy'])->middleware('auth.session');

        Route::get('settings', [Api\SettingController::class, 'index']);

        
    
    
    
    
    //    Route::put('user/language')
    
        Route::group(['prefix','user'],function(){
        });
    });
    
    
    Route::post('login',[Api\Auth\AuthenticationController::class,'login']);
    
    Route::post('register',[Api\Auth\AuthenticationController::class,'register']);
    
    Route::get('new-message',function (){
        $user = User::first();
        event(new NewMessageHasRecievedEvent($user));
        return [true];
    });

    Route::get('countries/{country}',[Api\CountryController::class,'show']);

    Route::get('init',[Api\UserController::class,'init']);
});
