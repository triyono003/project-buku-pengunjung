<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
  public function home() {
    return view('auth.register');
  }

  public function store(Request $request) {
    
    $request->validate([
       'username' => ['required','unique:users','alpha_num','min:3','max:25'],
       'name' => ['required','string','min:3'],
       'email' => ['required','email','unique:users'],
       'phone' => ['required'],
       'password' => ['required','min:4'],
     ]);
    User::create([
      'username' => $request->username,
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'password' => Hash::make($request->password),
    ]);

    session()->flash('success', 'your registered now');
    return redirect('auth/login');
  }
}