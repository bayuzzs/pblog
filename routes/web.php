<?php

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

Route::redirect('/', '/login');

Route::get('/login', function () {
    return 'test';
    })->name('login');

Route::get('login-pengimpor', function (Request $request) {
    $credentials = [
        'username' => 'pengimpor',
        'password' => 'pengimpor',
    ];

    if ( Auth::attempt($credentials) ) {
        $request->session()->regenerate();

        return 'berhasil login';
        }
    return 'gagal login';
    })->name('register');

Route::get('login-petugas', function (Request $request) {
    $credentials = [
        'username' => 'petugas',
        'password' => 'petugas',
    ];

    if ( Auth::guard('petugas')->attempt($credentials) ) {
        $request->session()->regenerate();

        return 'berhasil login';
        }
    return 'gagal login';
    })->name('register');

Route::get('/pengimpor', function () {
    if ( auth()->check() && ! auth('petugas')->check() ) {
        return 'pengimpor';
        }
    return 'belum login';
    })->name('register');

Route::get('/petugas', function () {
    if ( auth('petugas')->check() ) {
        return 'sudah login petugas';
        }
    return 'bukan petugas';
    })->name('register');
