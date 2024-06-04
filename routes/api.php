<?php

use App\Http\Controllers\DataMaster\HSController;
use App\Http\Controllers\DataMaster\JenisDokumenController;
use App\Http\Controllers\DataMaster\JenisKemasanController;
use App\Http\Controllers\DataMaster\KantorController;
use App\Http\Controllers\DataMaster\NegaraController;
use App\Http\Controllers\DataMaster\PelabuhanController;
use App\Http\Controllers\DataMaster\SatuanBarangController;
use App\Http\Controllers\DataMaster\ValutaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    });

Route::get('/hs', [HSController::class, 'list'])->name('api.hs');

Route::get('/negara', [NegaraController::class, 'list'])->name('api.negara');

Route::get('/valuta', [ValutaController::class, 'list'])->name('api.valuta');

Route::get('/jenis-kemasan', [JenisKemasanController::class, 'list'])->name('api.jenis-kemasan');

Route::get('/jenis-dokumen', [JenisDokumenController::class, 'list'])->name('api.jenis-dokumen');

Route::get('/satuan-barang', [SatuanBarangController::class, 'list'])->name('api.satuan-barang');

Route::get('/pelabuhan', [PelabuhanController::class, 'list'])->name('api.pelabuhan');

Route::get('/kantor', [KantorController::class, 'list'])->name('api.kantor');
