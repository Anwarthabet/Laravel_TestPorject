<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterUserController extends Controller
{
  public function create()
  {
    return view('/Auth/create');
  }
  public function store()
  {
     //   dd(request()->all());

    $attributes = request()->validate([
      'name' => 'first_name',
      'first_name' => 'required|string|min:3,first_name',
      'last_name' => 'required|string|min:3,last_name',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:6|',
    ]);

    $attributes['name'] = $attributes['first_name'] . ' ' . $attributes['last_name'];
unset($attributes['first_name'], $attributes['last_name']);
   $User = User::create($attributes);
   Auth::login($User);

   return redirect('/jobs')->with('success', 'User registered successfully!'); 
  }
}
