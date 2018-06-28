<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registration.create');
    }

    public function store()
    {
      //validation for data User
      $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      // Create and save the User
      $user = User::create(request(['name', 'email', 'password']));

      // Sign then in
      auth()->login($user);

      return redirect()->home();
    }
}
