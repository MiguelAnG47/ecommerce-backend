<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show')->name('products.show');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('welcome');
Route::get('/', [HomeController::class, 'welcome' ]);