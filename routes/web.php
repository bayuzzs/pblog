<?php

use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('welcome');
    })->middleware('auth:pengimpor,petugas')->name('dashboard');


Route::fallback(function () {
    return view('404');
    });

require __DIR__ . '/auth.php';