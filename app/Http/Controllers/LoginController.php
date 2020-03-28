<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('login.form');
    }

    public function login(Request $request) {
        $this->validateLogin($request);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request) {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return  redirect()->route('login');
    }


    protected function validateLogin(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function sendFailedLoginResponse(Request $request) {
        throw ValidationException::withMessages([
            'username' => ['Username or Password is wrong.'],
        ]);
    }

    protected function guard() {
        return Auth::guard();
    }

}
