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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/settings', [DashboardController::class, 'settings'])->middleware('bukan_petugas')->name('settings');
    });
Route::get('/dump', function () {
    return view('dump');
    });

Route::get('/data-master', function () {
    return view('data-master');
    });


require __DIR__ . '/auth.php';