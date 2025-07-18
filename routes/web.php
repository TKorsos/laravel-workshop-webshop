<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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

Route::get('/', function () {
    return view('index');
});


Route::post('/register', function (Request $request) {
    
    try{
        $validated = $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4|max:20|confirmed'
        ]);
    } catch( ValidationException $e ) {
        return response($e->errors());
    }


});