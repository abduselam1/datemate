<?php

use App\Events\NewMessageHasRecievedEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'auth:sanctum'],function (){
    Route::get('/user',function (Request $request){
        return $request->user();
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('new-message',function (){
    $user = User::first();
    event(new NewMessageHasRecievedEvent($user));
    return [true];
});