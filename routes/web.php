<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Admin Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/user', [HomeController::class, 'users'])->name('admin.users');
     Route::get('/users/{id}/edit', [HomeController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [HomeController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [HomeController::class, 'destroy'])->name('admin.users.destroy');
});


//user routes
 Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
 });