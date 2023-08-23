<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;


  Route::get('/', [HomeController::class, 'index']);
  Route::post('/', [ActionController::class, 'create']);
  
Route::middleware('guest')->group(function() {
  Route::get('/auth/register', [RegisterationController::class, 'home']);
  Route::get('/auth/login', [LoginController::class, 'home'])->name('login');


  Route::post('/auth/register', [RegisterationController::class, 'store']);
  Route::post('/auth/login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function() {
  Route::get('/action/index', [HomeController::class, 'pengunjung']);
  Route::get('/action/index', [ActionController::class, 'show']);
  Route::get('/action/{tamu}/data', [ActionController::class, 'showData']);
  
  Route::get('/auth/logout',LogoutController::class)->name('logout');
});