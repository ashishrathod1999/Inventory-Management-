<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Auth routes
Auth::routes();

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Home route
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Product routes

// Display a listing of the products.
Route::get('products', [ProductController::class, 'index'])->name('products.index');

// Show the form for creating a new product.
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Store a newly created product in storage.
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// Show the form for editing the specified product.
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Update the specified product in storage.
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

// Remove the specified product from storage.
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


// Category routes

// Display a listing of the categories.
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');

// Show the form for creating a new category.
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Store a newly created category in storage.
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');

// Show the form for editing the specified category.
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// Update the specified category in storage.
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

// Remove the specified category from storage.
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

});

