<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');




// Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/organisation', [AuthController::class, 'organisation'])->name('organisation');