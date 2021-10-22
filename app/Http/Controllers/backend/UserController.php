<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view('backend.login');
    }

    public function home() {
        return view('backend.home');
    }

    public function doLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('backend.home');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid Credentials.');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('backend.root');
    }
}
