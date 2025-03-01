<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

/**  Admin Route */

Route::get('dashboard',[AdminController::class,'adminDashboard'])->name('dashboard');
Route::get('profile',[AdminController::class,'index'])->name('profile');
Route::post('profile/update',[AdminController::class,'profileUpdate'])->name('profile.update');
Route::post('password/update',[AdminController::class,'passwordUpdate'])->name('password.update');