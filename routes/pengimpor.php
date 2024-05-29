<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:pengimpor')->group(function () {
    Route::get('/settings', [DashboardController::class, 'settingsIndex'])->name('settings');

    });
