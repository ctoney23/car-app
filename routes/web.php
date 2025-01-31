<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cars', [CarController::class, 'index'])->name('car');
Route::get('/about', [AboutController::class, 'about'])->name('about');