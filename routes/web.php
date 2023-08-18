<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActionController;
                                                                

Route::get('/',[HomeController::class,'index']);
Route::get('/action/index',[HomeController::class,'pengunjung']);
Route::post('/',[ActionController::class,'create']);
Route::get('/action/index',[ActionController::class,'show']);

Route::get('/action/{id}/data',[ActionController::class,'showData']);


                                                                