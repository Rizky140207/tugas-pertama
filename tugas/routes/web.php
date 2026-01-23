<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'ini adalah route utama';
    //return view('welcome');
});

Route::get('/products', function () {
    return 'ini adalah route products';
});

Route::get('/cart', function () {
    return 'ini adalah route cart';
});

Route::get('/checkout', function () {
    return 'ini adalah route checkout';
});
