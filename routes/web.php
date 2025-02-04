<?php

use App\Http\Middleware\TestUser;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
})->name('user');
Route::view('register', 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');
Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

// Custom middleware
// Route::get('dashboard', [UserController::class, 'dashboardPage'])
//     ->name('dashboard')
//     ->middleware(['IsUserValid:admin', TestUser::class]);
// Route::get('dashboard/inner', [UserController::class, 'innerPage'])
//     ->name('inner')
//     ->middleware(['IsUserValid:admin', TestUser::class]);

    // Laravel inbuild middleware
    Route::get('dashboard', [UserController::class, 'dashboardPage'])
    ->name('dashboard')
    ->middleware(['auth','IsUserValid:admin']);
Route::get('dashboard/inner', [UserController::class, 'innerPage'])
    ->name('inner')
    ->middleware(['auth','IsUserValid:admin']);

// Route::middleware(['ok-user'])->group(function () {
//     Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard');
//     Route::get('dashboard/inner', [UserController::class, 'innerPage'])->name('inner')->withoutMiddleware([TestUser::class]);
// });

Route::get('logout', [UserController::class, 'logout'])->name('logout');
