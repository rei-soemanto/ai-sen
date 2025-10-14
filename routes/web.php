<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Solutions
Route::get('/solution', [PageController::class, 'solutions'])->name('solution');
Route::get('/solution/{id}', [PageController::class, 'solutionDetail'])->name('solution.detail');

// Products
Route::get('/product', [PageController::class, 'products'])->name('product');
Route::get('/product/{id}', [PageController::class, 'productDetail'])->name('product.detail');

// Contacts
Route::get('/contact', [PageController::class, 'contacts'])->name('contact');