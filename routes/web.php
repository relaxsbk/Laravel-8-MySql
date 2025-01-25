<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Если смотрят по комитам, то это пока заглушка :)
Route::get('/products', [HomeController::class, 'products'])->name('products');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'create'])->name('user.create');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile',[UserController::class, 'profile'])->name('profile');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
