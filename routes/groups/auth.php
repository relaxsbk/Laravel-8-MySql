<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\UserController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'create'])->name('user.create');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile',[UserController::class, 'profile'])->name('profile');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
