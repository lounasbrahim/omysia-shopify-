<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/authenticate', [AuthController::class, 'authenticate']);
Route::get('/authenticate/callback', [AuthController::class, 'callback']);
