<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Notifications\ProductCreatedNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductController::class);

require __DIR__ . '/groups/auth.php';

//Шаблон письма
Route::get('/notification', function () {
    $product = \App\Models\Product::find(1);

    return (new ProductCreatedNotification($product))
        ->toMail($product->user);
});
