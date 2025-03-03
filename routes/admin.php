<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

/**  Admin Route */

Route::get('dashboard',[AdminController::class,'adminDashboard'])->name('dashboard');
Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::post('profile/update',[ProfileController::class,'profileUpdate'])->name('profile.update');
Route::post('password/update',[ProfileController::class,'passwordUpdate'])->name('password.update');


/** Slider Route */

Route::resource('slider',SliderController::class);