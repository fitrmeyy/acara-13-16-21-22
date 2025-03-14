<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;

// Redirect dari root ke dashboard
Route::get('/', function() {
    return redirect('/backend/dashboard');
});

// Route dengan prefix backend
Route::prefix('backend')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);
    
    // Route untuk profile
    Route::get('users-profile', function() {
        return view('backend.users-profile');
    })->name('users-profile');
});