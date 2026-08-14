<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminServicesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/lacak-resi', [TrackingController::class, 'index'])->name('tracking');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // SERVICES
    Route::get('/services', [AdminServicesController::class, 'index'])->name('services');
    Route::post('/services', [AdminServicesController::class, 'store'])->name('services.store');
    Route::put('/services/{service}', [AdminServicesController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [AdminServicesController::class, 'destroy'])->name('services.destroy');
});