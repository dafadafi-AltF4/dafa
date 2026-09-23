<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'profile']);

use App\Http\Controllers\PortofolioController;

Route::get('/portofolio', [PortofolioController::class, 'index']);