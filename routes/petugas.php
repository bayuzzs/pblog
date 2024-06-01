<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMaster\HSController;
use App\Http\Controllers\DataMaster\JenisDokumenController;
use App\Http\Controllers\DataMaster\JenisKemasanController;
use App\Http\Controllers\DataMaster\KantorController;
use App\Http\Controllers\DataMaster\NegaraController;
use App\Http\Controllers\DataMaster\PelabuhanController;
use App\Http\Controllers\DataMaster\SatuanBarangController;
use App\Http\Controllers\DataMaster\ValutaController;

Route::middleware('auth:petugas')->group(function () {
    Route::get('/data-master', [DashboardController::class, 'dataMasterIndex'])->name('data-master.index');

    Route::prefix('/data-master/hs')->group(function () {
        Route::get('/', [HSController::class, 'index'])->name('data-master.hs');

        Route::post('/', [HSController::class, 'store']);

        Route::put('/', [HSController::class, 'update']);

        Route::delete('/', [HSController::class, 'destroy']);
        });

    Route::prefix('/data-master/negara')->group(function () {
        Route::get('/', [NegaraController::class, 'index'])->name('data-master.negara');

        Route::post('/', [NegaraController::class, 'store']);

        Route::put('/', [NegaraController::class, 'update']);

        Route::delete('/', [NegaraController::class, 'destroy']);
        });

    Route::prefix('/data-master/valuta')->group(function () {
        Route::get('/', [ValutaController::class, 'index'])->name('data-master.valuta');

        Route::post('/', [ValutaController::class, 'store']);

        Route::put('/', [ValutaController::class, 'update']);

        Route::delete('/', [ValutaController::class, 'destroy']);
        });

    Route::prefix('/data-master/jenis-kemasan')->group(function () {
        Route::get('/', [JenisKemasanController::class, 'index'])->name('data-master.jenis-kemasan');

        Route::post('/', [JenisKemasanController::class, 'store']);

        Route::put('/', [JenisKemasanController::class, 'update']);

        Route::delete('/', [JenisKemasanController::class, 'destroy']);
        });

    Route::prefix('/data-master/jenis-dokumen')->group(function () {
        Route::get('/', [JenisDokumenController::class, 'index'])->name('data-master.jenis-dokumen');

        Route::post('/', [JenisDokumenController::class, 'store']);

        Route::put('/', [JenisDokumenController::class, 'update']);

        Route::delete('/', [JenisDokumenController::class, 'destroy']);
        });

    Route::prefix('/data-master/satuan-barang')->group(function () {
        Route::get('/', [SatuanBarangController::class, 'index'])->name('data-master.satuan-barang');

        Route::post('/', [SatuanBarangController::class, 'store']);

        Route::put('/', [SatuanBarangController::class, 'update']);

        Route::delete('/', [SatuanBarangController::class, 'destroy']);
        });

    Route::prefix('/data-master/pelabuhan')->group(function () {
        Route::get('/', [PelabuhanController::class, 'index'])->name('data-master.pelabuhan');

        Route::post('/', [PelabuhanController::class, 'store']);

        Route::put('/', [PelabuhanController::class, 'update']);

        Route::delete('/', [PelabuhanController::class, 'destroy']);
        });

    Route::prefix('/data-master/kantor')->group(function () {
        Route::get('/', [KantorController::class, 'index'])->name('data-master.kantor');

        Route::post('/', [KantorController::class, 'store']);

        Route::put('/', [KantorController::class, 'update']);

        Route::delete('/', [KantorController::class, 'destroy']);
        });

    });