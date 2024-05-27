<?php
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PengimporAuthController;
use App\Http\Controllers\Auth\PetugasAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
	Route::get('/auth', [PengimporAuthController::class, 'indexAuth'])->middleware('bukan_petugas')->name('auth');

	Route::get('/auth-petugas', [PetugasAuthController::class, 'indexAuth'])->name('auth-pengimpor');

	Route::post('/login-petugas', [PetugasAuthController::class, 'storeLogin'])->name('login-petugas.store');

	Route::post('/login', [PengimporAuthController::class, 'storeLogin'])->name('login.store');

	Route::post('/register', [PengimporAuthController::class, 'storeRegister'])->name('register.store');

	Route::get('/forgot-password', [PasswordResetController::class, 'indexForgot'])->name('password.request');

	Route::post('/forgot-password', [PasswordResetController::class, 'storeForgot'])->name('password.email');

	Route::get('/reset-password/{token}', [PasswordResetController::class, 'indexReset'])->name('password.reset');

	Route::post('/reset-password', [PasswordResetController::class, 'storeReset'])->name('password.update');
	});

Route::middleware('auth:pengimpor,petugas')->group(function () {
	Route::get('/logout', [PengimporAuthController::class, 'logout'])->name('auth.logout');

	Route::post('/change-password', [PengimporAuthController::class, 'storeChangePassword'])->middleware('bukan_petugas')->name('change-password.store');

	Route::post('/update-profile', [PengimporAuthController::class, 'updateProfile'])->middleware('bukan_petugas')->name('updateProfile.store');
	});