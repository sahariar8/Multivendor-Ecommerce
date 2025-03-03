<?php



use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\VendorProfileController;
use Illuminate\Support\Facades\Route;


/** Vendor Route */

Route::get('dashboard',[VendorController::class,'vendorDashboard'])->name('dashboard');
Route::get('profile',[VendorProfileController::class,'index'])->name('profile');
Route::put('profile',[VendorProfileController::class,'profileUpdate'])->name('profile.update');
Route::post('password',[VendorProfileController::class,'passwordUpdate'])->name('password.update');