<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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

        if (!Auth::attempt($attributes)) {
          throw ValidationException::withMessages([

            'email' => 'Invalid eamil address',
            'password' => 'Invalid password',
          ]);
            
        } else {
            return redirect('/jobs')->with('success', 'Logged in successfully!');
        }
        request()->session()->regenerate();

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
