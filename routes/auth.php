<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\PasswordResetController;

Route::prefix('guest')->group(function () {
    // Login
    Route::get('/login', fn() => view('auth.login'))->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Forgot Password
    Route::get('/forgot', fn() => view('auth.forgot'))->name('forgot');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('/reset-password', [PasswordResetController::class, 'create'])
        ->name('guest.password.reset');

    Route::post('/reset-password', [PasswordResetController::class, 'reset'])
        ->name('guest.password.update');
});

/**
 * Protected Routes (require authentication + role)
 */
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    });

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
