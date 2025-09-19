<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthController;

/**
 * Public Routes (accessible without login)
 */
Route::get('/login', function () {
    return view('auth.login'); // login.blade.php
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/forgot', function () {
    return view('auth.forgot'); // forgot.blade.php
})->name('forgot');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

/**
 * Protected Routes (require authentication + role)
 */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

    // Logout route (only for logged-in users)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
