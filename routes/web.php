<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('register','register')->name('register');
Route::post('registerSave', [UserController::class,'register'])->name('registerSave');
Route::view('login','login')->name('login');
