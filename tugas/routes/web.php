<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', function () {
    return view('dashboard.products.index');
})->name('products');

Route::get('/products/tambah', function () {
    return view('dashboard.products.tambah');
})->name('products-tambah');

Route::get('/products/edit', function () {
    return view('dashboard.products.edit');
})->name('products-edit');

Route::get('/category-products', function () {
    return view('dashboard.category_products.index'); 
})->name('category-products');

Route::get('/category-products/tambah', function () {
    return view('dashboard.category_products.tambah'); 
})->name('category-products-tambah');

Route::get('/category-products/edit', function () {
    return view('dashboard.category_products.edit'); 
})->name('category-products-edit');

require __DIR__.'/auth.php';
