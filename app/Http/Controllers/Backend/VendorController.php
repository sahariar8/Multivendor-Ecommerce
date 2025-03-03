<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendorDashboard()
    {
        return view('vendor.dashboard.dashboard');
    }
}