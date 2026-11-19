<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StanController;

Route::redirect('/', '/dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD stan kantin (tanpa halaman show; detail ditampilkan di tabel)
Route::resource('stan', StanController::class)->except('show');