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
    Route::get('/pengaturan', [DashboardController::class, 'settingsIndex'])->name('settings');

    Route::prefix('/dokumen-impor')->group(function () {
        Route::get('/', [DokumenImporController::class, 'index'])->name('dokumen-impor');
        Route::post('/', [DokumenImporController::class, 'store']);
        Route::delete('/', [DokumenImporController::class, 'destroy']);


        Route::prefix('/{nomorAju}')->middleware('dokumen-impor')->group(function () {
            Route::get('/', [DokumenImporController::class, 'redirect']);

            Route::get('/cetak', [DokumenImporController::class, 'print'])->name('dokumen-impor.cetak');

            Route::get('/header', [HeaderController::class, 'index'])->name('dokumen-impor.header');
            Route::post('/header', [HeaderController::class, 'store']);

            Route::get('/entitas', [EntitasController::class, 'index'])->name('dokumen-impor.entitas');
            Route::post('/entitas', [EntitasController::class, 'store']);

            Route::get('/dokumen-pendukung', [DokumenPendukungController::class, 'index'])->name('dokumen-impor.dokumen-pendukung');
            Route::post('/dokumen-pendukung', [DokumenPendukungController::class, 'store']);
            Route::put('/dokumen-pendukung', [DokumenPendukungController::class, 'update']);
            Route::delete('/dokumen-pendukung', [DokumenPendukungController::class, 'destroy']);

            Route::get('/transaksi', [TransaksiController::class, 'index'])->name('dokumen-impor.transaksi');
            Route::post('/transaksi', [TransaksiController::class, 'store']);

            Route::get('/barang', [BarangController::class, 'index'])->name('dokumen-impor.barang');
            Route::get('/barang/tambah', [BarangController::class, 'indexTambah'])->name('dokumen-impor.barang.add');
            Route::get('/barang/{barangId}/edit', [BarangController::class, 'indexEdit'])->name('dokumen-impor.barang.edit');
            Route::post('/barang', [BarangController::class, 'store']);
            Route::put('/barang', [BarangController::class, 'update']);
            Route::delete('/barang', [BarangController::class, 'destroy']);

            Route::get('/pungutan', [PungutanController::class, 'index'])->name('dokumen-impor.pungutan');
            Route::post('/pungutan', [PungutanController::class, 'store']);

            Route::get('/pernyataan', [PernyataanController::class, 'index'])->name('dokumen-impor.pernyataan');
            Route::post('/pernyataan', [PernyataanController::class, 'store']);

            Route::middleware('dokumen-berwujud')->group(function () {
                Route::get('/pengangkutan', [PengangkutanController::class, 'index'])->name('dokumen-impor.pengangkutan');
                Route::post('/pengangkutan', [PengangkutanController::class, 'store']);

                Route::get('/kemasan-kontainer', [KemasanKontainerController::class, 'index'])->name('dokumen-impor.kemasan-kontainer');

                Route::post('/kemasan-kontainer/kemasan', [KemasanKontainerController::class, 'storeKemasan'])->name('dokumen-impor.kemasan.store');
                Route::put('/kemasan-kontainer/kemasan', [KemasanKontainerController::class, 'updateKemasan'])->name('dokumen-impor.kemasan.update');
                Route::delete('/kemasan-kontainer/kemasan', [KemasanKontainerController::class, 'destroyKemasan'])->name('dokumen-impor.kemasan.destroy');

                Route::post('/kemasan-kontainer/kontainer', [KemasanKontainerController::class, 'storeKontainer'])->name('dokumen-impor.kontainer.store');
                Route::put('/kemasan-kontainer/kontainer', [KemasanKontainerController::class, 'updateKontainer'])->name('dokumen-impor.kontainer.update');
                Route::delete('/kemasan-kontainer/kontainer', [KemasanKontainerController::class, 'destroyKontainer'])->name('dokumen-impor.kontainer.destroy');
                });
            });
        });

    });
