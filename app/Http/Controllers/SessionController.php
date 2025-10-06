<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attrs =$request->validate([
            'email'=>['required','email'],
            'password'=>['required',]
        ]);
        // dd(Auth::user());
        if(!Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                'email'=>'Sorry the credentials do not match'
            ]);
        }
        $request->session()->regenerate();
        return redirect('/dashboard');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        // dd(Auth::user());
        return redirect('/register');
    }
}
