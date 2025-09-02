<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/authenticate', [\Osiset\ShopifyApp\Http\Controllers\AuthController::class, 'index'])->name('authenticate');
