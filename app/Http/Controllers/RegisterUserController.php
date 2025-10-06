<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
            $attrs =$request->validate([
            'name'=>['required','max:60'],
            'email'=>['required','email','unique:users'],
            'password'=>['required',Password::min(6)],
        ]);
        $user = User::create($attrs)->assignRole('user');
        Auth::login($user);
        return redirect('/dashboard');
    }
}
