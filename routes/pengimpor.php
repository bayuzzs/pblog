<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenImpor\BarangController;
use App\Http\Controllers\DokumenImpor\DokumenImporController;
use App\Http\Controllers\DokumenImpor\DokumenPendukungController;
use App\Http\Controllers\DokumenImpor\EntitasController;
use App\Http\Controllers\DokumenImpor\HeaderController;
use App\Http\Controllers\DokumenImpor\KemasanKontainerController;
use App\Http\Controllers\DokumenImpor\PengangkutanController;
use App\Http\Controllers\DokumenImpor\PernyataanController;
use App\Http\Controllers\DokumenImpor\PungutanController;
use App\Http\Controllers\DokumenImpor\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:pengimpor')->group(function () {
    Route::get('/settings', [DashboardController::class, 'settingsIndex'])->name('settings');

    Route::prefix('/dokumen-impor')->group(function () {
        Route::get('/', [DokumenImporController::class, 'index'])->name('dokumen-impor');

        Route::get('/{nomorAju}/header', [HeaderController::class, 'index'])->name('dokumen-impor.header');

        Route::get('/{nomorAju}/entitas', [EntitasController::class, 'index'])->name('dokumen-impor.entitas');

        Route::get('/{nomorAju}/dokumen-pendukung', [DokumenPendukungController::class, 'index'])->name('dokumen-impor.dokumen-pendukung');

        Route::get('/{nomorAju}/pengangkutan', [PengangkutanController::class, 'index'])->name('dokumen-impor.pengangkutan');

        Route::get('/{nomorAju}/kemasan-kontainer', [KemasanKontainerController::class, 'index'])->name('dokumen-impor.kemasan-kontainer');

        Route::get('/{nomorAju}/transaksi', [TransaksiController::class, 'index'])->name('dokumen-impor.transaksi');

        Route::get('/{nomorAju}/barang', [BarangController::class, 'index'])->name('dokumen-impor.barang');

        Route::get('/{nomorAju}/pungutan', [PungutanController::class, 'index'])->name('dokumen-impor.pungutan');

        Route::get('/{nomorAju}/pernyataan', [PernyataanController::class, 'index'])->name('dokumen-impor.pernyataan');

        });
    });
