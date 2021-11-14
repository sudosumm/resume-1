<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('index/create',[\App\Http\Controllers\Contact\InController::class,'create']);
Route::post('index/create',[\App\Http\Controllers\Contact\InController::class,'store']);
