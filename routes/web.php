<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Если смотрят по комитам, то это пока заглушка :)
Route::get('/products', [HomeController::class, 'products'])->name('products');
