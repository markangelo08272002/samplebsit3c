<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; // Capital "A" in App
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Admin Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
});

//user routes
 Route::prefix('user')->name('user')->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('home');
 });