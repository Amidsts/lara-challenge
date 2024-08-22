<?php

namespace App\Http\Controllers;
use App\Models\User;
use illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create () {
        return view('auth.register');
    }

    public function store() {
        $validAttr = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::create($validAttr);
        Auth::login($user);

        return redirect('/jobs');
    }
}
