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
       dd('Login Action');
    }
    public function destroy()
    {
        // Logic to handle logout
Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully!');
    }
}
