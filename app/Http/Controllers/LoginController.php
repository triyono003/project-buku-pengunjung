<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
  public function home() {
    return view('auth.login');
  }

  public function store(Request $request) {

    $attributes = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($attributes))
    {
      return redirect(RouteServiceProvider::HOME)->with('success', 'your are now logged');
    }
    throwValidationException::withMessages([
        'email' => 'your email or password is wrong',
      ]);
    }
  }