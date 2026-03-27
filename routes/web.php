<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DigitalArchiveController;

/*
|--------------------------------------------------------------------------
| Web Routes — Sanggar Mulya Bhakti
|--------------------------------------------------------------------------
*/

// Public pages
Route::get('/',               [HomeController::class,           'index'])->name('home');
Route::get('/profile',        [ProfileController::class,        'index'])->name('profile');
Route::get('/event',          [EventController::class,          'index'])->name('event');
Route::get('/digital-archive',[DigitalArchiveController::class, 'index'])->name('digital-archive');

// Auth pages (gunakan Laravel Breeze / Jetstream, atau buat manual)
Route::get('/masuk',   fn() => view('auth.login'))->name('login');
Route::get('/daftar',  fn() => view('auth.register'))->name('register');