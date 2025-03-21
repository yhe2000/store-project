<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Dashboared routs

Route::get('admin/products', [ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('products.store');
Route::get('admin/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('admin/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('admin/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


//Fornt page routs



Route::get('/',[FrontController::class,'index']);

// مسار المنتجات
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// مسار الأصناف
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

