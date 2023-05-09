<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Onboard;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Igaster\LaravelCities\Geo;
use PragmaRX\Countries\Package\Countries;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::view('/login','app')->name('login');

// Route::view('/register','app')->name('register');

// Route::view('/forgot-password','app')->name('forgot');

// Route::view('/onboard','app');

// Route::view('/', 'app');

// Route::view('/setting', 'app');

Route::get('login', Login::class)->name('login')->middleware('guest');

Route::get('register', Register::class)->name('register')->middleware('guest');

Route::get('onboard',Onboard::class)->name('onboard')->middleware('guest');

Route::get('reset-password', ResetPassword::class)->name('reset-password')->middleware('guest');

Route::get('forgot-password', ForgotPassword::class)->name('forgot-password')->middleware('guest');


Route::get('geo',function(){
    // return Geo::getCountries();               // Get a Collection of all countries
    // Geo::getCountry('US');             // Get item by Country code
    // return Geo::findName('Eth');   // Find item by (ascii) name
    // return Geo::searchNames('Eth');          // Search item by all alternative names. Case insensitive 
    // Geo::searchNames('vegas', Geo::getCountry('US'));  // ... and belongs to an item
    // Geo::getByIds([390903, 3175395]);   // Get a Collection of items by Ids

    $c = Countries::where('name','Ethiopia')->count();
    return $c;
});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');

Route::group(['middleware'=>'auth'],function(){
    Route::view('/test','app');
    

});


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
