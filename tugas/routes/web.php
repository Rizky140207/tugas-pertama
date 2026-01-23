<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/cart',[HomeController::class, 'cart']);

Route::get('/products', function () {
    return 'ini adalah route products';
});

// Route::get('/cart', function () {
//     return 'ini adalah route cart';
// });

Route::get('/checkout', function () {
    return 'ini adalah route checkout';
});

Route::resource('products-r', ProductController::class);