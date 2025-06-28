<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyForGuests;
use App\Http\Middleware\OnlyForUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', function () {
    return view('register');
})->middleware(OnlyForGuests::class);

Route::post('/register', [UserController::class, 'registerProcess'])->middleware(OnlyForGuests::class);

Route::get('/login', function () {
    return view('login');
})->middleware(OnlyForGuests::class);

Route::post('/login', [UserController::class, 'loginProcess'])->middleware(OnlyForGuests::class);


Route::get('/profile', function () {
    return view('profile');
})->middleware(OnlyForUsers::class);

Route::get('/logout', function () {
    Auth::logout();

    return redirect()->to('login')->with('success', __('Logout was success!'));
})->middleware(OnlyForUsers::class);