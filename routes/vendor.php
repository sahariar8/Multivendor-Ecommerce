<?php



use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;


/** Vendor Route */

Route::get('dashboard',[VendorController::class,'vendorDashboard'])->name('dashboard');

