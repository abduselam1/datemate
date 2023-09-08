<?php

use App\Http\Controllers\API\LanguageController;
use App\Http\Controllers\API\PictureController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Events\NewMessageHasRecievedEvent;
use App\Http\Controllers\API\Auth\AuthenticationController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\MessageController;

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

Route::group(['middleware'=>'auth'],function (){

    Route::get('logout',[AuthenticationController::class,'logout']);

    Route::get('user',[UserController::class,'user']);

    Route::get('messages-count',[MessageController::class,'countMessages']);

    Route::get('get-profile',[UserController::class,'getProfile']);


    Route::post('picture',[PictureController::class,'store'])->name('picture.store');

    Route::delete('picture/{picture}',[PictureController::class,'destroy'])->name('picture.delete');

    Route::put('picture/{picture}',[PictureController::class,'edit'])->name('picture.edit');

    Route::get('languages',[LanguageController::class,'index']);

    Route::put('user/language', [UserController::class, 'editLanguage']);

    Route::put('user/purpose', [UserController::class, 'editPurpose']);

    Route::put('user/interest',[UserController::class,'editInterest']);

    Route::put('user/education-and-work',[UserController::class,'editEducationAndWork']);

    Route::put('user/info',[UserController::class,'editUser']);

    Route::get('interests',[UserController::class,'interestIndex']);

    Route::get('job-title',[UserController::class,'jobTitleIndex']);

    Route::get('religion',[UserController::class,'religionIndex']);




//    Route::put('user/language')

    Route::group(['prefix','user'],function(){
    });
});

Route::post('login',function(Request $request){

    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $this->remember ?? false)) {
        // SessionService::createSession($this->ip);
        return response(true);
        return redirect('/');
    } else {
        return response(['credential'=> "The credential do not match our records"],412);
        // return $this->addError('credential', "The credential do not match our records");
    }
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('a',function(){
//     return 'adf';
// });

Route::get('new-message',function (){
    $user = User::first();
    event(new NewMessageHasRecievedEvent($user));
    return [true];
});
