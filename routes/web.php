<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/forgot', function(){
    return view('auth.forgot');
})->name('forgot');