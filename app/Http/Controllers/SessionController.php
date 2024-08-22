<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function signin() {
        $validAttr =request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($validAttr)) {
            throw ValidationException::withMessages([
                'email' => 'credentials do not match',
                'password' => 'credentials do not match'
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/');
    }
}
