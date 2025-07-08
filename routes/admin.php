<?php

use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

