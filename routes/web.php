<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Users routes
Route::get('api/users', [UserController::class, 'index'])->name('users.index');
Route::get('api/users/{id}', [UserController::class, 'show'])->name('users.show');

// Products routes
Route::get('api/products', [ProductController::class, 'index'])->name('products.index');
Route::get('api/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Homepage
Route::get('/', function () {
    return view('welcome');
});