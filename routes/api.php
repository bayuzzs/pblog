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

Route::get('/hs', [HSController::class, 'list']);

Route::get('/negara', [NegaraController::class, 'list']);

Route::get('/valuta', [ValutaController::class, 'list']);

Route::get('/jenis-kemasan', [JenisKemasanController::class, 'list']);

Route::get('/jenis-dokumen', [JenisDokumenController::class, 'list']);

Route::get('/satuan-barang', [SatuanBarangController::class, 'list']);

Route::get('/pelabuhan', [PelabuhanController::class, 'list']);

Route::get('/kantor', [KantorController::class, 'list']);
