<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'auth')->name('home');

Route::fallback(function () {
    return view('404');
    });

Route::middleware('auth:pengimpor,petugas')->group(function () {

    Route::get('/beranda', [DashboardController::class, 'index'])->name('dashboard');

    });


require __DIR__ . '/auth.php';
require __DIR__ . '/pengimpor.php';
require __DIR__ . '/petugas.php';