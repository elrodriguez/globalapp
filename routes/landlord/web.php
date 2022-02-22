<?php

use App\Http\Controllers\Landlord\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('login', [AuthController::class, 'login'])->name('login');