<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

// Halaman utama diarahkan langsung ke daftar post
Route::get('/', [PostController::class, 'index'])->name('home');