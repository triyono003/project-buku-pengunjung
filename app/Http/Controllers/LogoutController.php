<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
   public function __invoke(Request $request)
   {
     Auth::logout();
     return redirect(RouteServiceProvider::HOME);
   }
}
