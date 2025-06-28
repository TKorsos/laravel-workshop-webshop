<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function registerProcess(RegisterRequest $request) {
        $validated = $request->validated();

        User::create($validated);

        return redirect()->back()->with('success', __('Success operation!'));
    }

    function loginProcess(Request $request) {
        if(!Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->back()->with('errors', __('Login failed!'));
        }

        return redirect()->to('/profile')->with('success', __('The login was success!'));
    }

}
