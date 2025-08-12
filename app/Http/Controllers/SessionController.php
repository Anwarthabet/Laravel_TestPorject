<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

 

class SessionController extends Controller
{
     public function create()
    {
        return view('/Auth/login');
    }
      public function store()
    {
       $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'Logged in successfully!');
        }
        request()->session()->regenerate();

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
    public function destroy()
    {
        // Logic to handle logout
Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
