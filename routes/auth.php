<?php
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PengimporAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
	Route::get('/login', [PengimporAuthController::class, 'indexLogin'])->name('login');

	Route::post('/login', [PengimporAuthController::class, 'storeLogin'])->name('login.store');

	Route::get('/forgot-password', [PasswordResetController::class, 'indexForgot'])->name('password.request');

	Route::post('/forgot-password', [PasswordResetController::class, 'storeForgot'])->name('password.email');

	Route::get('/reset-password/{token}', [PasswordResetController::class, 'indexReset'])->name('password.reset');

	Route::post('/reset-password', [PasswordResetController::class, 'storeReset'])->name('password.update');
	});