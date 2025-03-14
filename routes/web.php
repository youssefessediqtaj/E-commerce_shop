<?php

use App\Http\Controllers\ProductController; // Ensure correct capitalization
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Articles Resource Route
Route::resource('articles', ArticleController::class);

// Dashboard Route
Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

// Product Details Route
Route::get('/details/{id}', [ProductController::class, 'productdetails'])->name('product.details');

// Order Route
Route::get('/order', [OrderProductController::class, 'index'])->name('order');