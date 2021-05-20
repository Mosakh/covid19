<?php

use App\Http\Controllers\AreaCtr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CaseCtr;
use App\Http\Controllers\ProvinceCtr;
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
Route::resource('covide/area',AreaCtr::class);
Route::resource('covide/province',ProvinceCtr::class);
Route::resource('covide/case',CaseCtr::class);

// Route::post('covide/area/create',[AreaCtr::class,'index'])->name('area.create');

// Route::post('covide/area/create',AreaCtr::class,'create')->name('area.create');

Route::get('/', function () {
    return view('index');
    // resouce/views/welcome.blade
});

Route::get('/signin', function () {
    return view('login');
    // resouce/views/login.blade
});

Route::get('/register', function () {
    return view('register');
    // resouce/views/register.blade
});

Route::post('/register_action', [RegisterController::class, 'index']);

Route::post('/entry', [RegisterController::class, 'login']);

Route::get('/signout', function() {
    Auth::logout();

    return Redirect::to('signin');
})->middleware('auth');

Route::resource('covid',  BackendController::class);

Route::get('/entry', [BackendController::class, 'displayEntry'])->middleware('auth');
Route::post('entry/fetch', [BackendController::class, 'fetch'])->name('dynamicdependent.fetch');

Route::get('/listing', [BackendController::class, 'displayListing'])->middleware('auth');

Route::get('/search', [BackendController::class, 'search'])->middleware('auth');
