<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::Post('/register', [\App\Http\Controllers\UserController::class, 'store'])->name('user.register');


Route::middleware(['isUser', 'auth'])->prefix('/user')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserDahsboardController::class, 'index'])->name('user.dashboard');
    Route::post('/update', [\App\Http\Controllers\UserDahsboardController::class, 'updateProfile'])->name('update.profile');
    Route::post('change-password', [\App\Http\Controllers\UserDahsboardController::class, 'store'])->name('change.password');
});

