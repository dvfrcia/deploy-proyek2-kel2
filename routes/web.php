<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DigitalArchiveController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes — Sanggar Mulya Bhakti
|--------------------------------------------------------------------------
*/

// ─── PUBLIC PAGES ────────────────────────────────────────────────────────
Route::get('/',                [HomeController::class,           'index'])->name('home');
Route::get('/profile',         [ProfileController::class,        'index'])->name('profile');
Route::get('/event',           [EventController::class,          'index'])->name('event');
Route::get('/digital-archive', [DigitalArchiveController::class, 'index'])->name('digital-archive');

// ─── AUTH (GUEST ONLY) ───────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/masuk',   [AuthController::class, 'showLogin'])->name('login');
    Route::post('/masuk',  [AuthController::class, 'login'])->name('login.post');
    Route::get('/daftar',  [AuthController::class, 'showRegister'])->name('register');
    Route::post('/daftar', [AuthController::class, 'register'])->name('register.post');
});

Route::get('/lupa-password', fn() => back())->name('password.request');

// ─── LOGOUT ──────────────────────────────────────────────────────────────
Route::post('/keluar', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// ─── PROTECTED ───────────────────────────────────────────────────────────
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn() => view('pages.dashboard'))->name('dashboard');
});

// ─── ADMIN ───────────────────────────────────────────────────────────────
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('dashboard');
});