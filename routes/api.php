<?php

use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\PictureController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Events\NewMessageHasRecievedEvent;
use App\Http\Controllers\Api\Auth\AuthenticationController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\OnboardController;

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
    
        Route::get('onboard',[OnboardController::class,'create']);
    
        Route::post('onboard',[OnboardController::class,'store']);
    
        Route::get('logout',[AuthenticationController::class,'logout']);
    
        Route::get('user',[UserController::class,'user']);
    
        Route::get('messages-count',[MessageController::class,'countMessages']);
    
        Route::get('get-profile',[UserController::class,'getProfile']);
    
    
        Route::post('picture',[PictureController::class,'store'])->name('picture.store');
    
        Route::delete('picture/{picture}',[PictureController::class,'destroy'])->name('picture.delete');
    
        Route::put('picture/{picture}',[PictureController::class,'edit'])->name('picture.edit');
    
        Route::put('user/language', [UserController::class, 'editLanguage']);
    
        Route::put('user/purpose', [UserController::class, 'editPurpose']);
    
        Route::put('user/interest',[UserController::class,'editInterest']);
    
        Route::put('user/education-and-work',[UserController::class,'editEducationAndWork']);
    
        Route::put('user/info',[UserController::class,'editUser']);
    
        Route::get('interests',[UserController::class,'interestIndex']);
    
        
    
    
    
    
    //    Route::put('user/language')
    
        Route::group(['prefix','user'],function(){
        });
    });
    
    
    Route::post('login',[AuthenticationController::class,'login']);
    
    Route::post('register',[AuthenticationController::class,'register']);
    
    Route::get('new-message',function (){
        $user = User::first();
        event(new NewMessageHasRecievedEvent($user));
        return [true];
    });

    Route::get('countries/{country}',[CountryController::class,'show']);

    Route::get('init',[UserController::class,'init']);
});
