<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;

// Route::get('/', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware('auth')->name('admin.dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('admin.pages.dashboard');
// })->name('admin.dashboard');

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/organisation', [AuthController::class, 'organisation'])->name('organisation');