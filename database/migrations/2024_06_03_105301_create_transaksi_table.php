<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
        {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('transaksiId');
            $table->decimal('ndpbm', 24, 4);
            $table->decimal('freight', 24, 4);
            $table->enum('kodeJenisTransaksi', ['IMB', 'IOA', 'KMD', 'KON', 'LAI', 'PMK', 'RLC', 'SLC', 'ULC', 'WSI']);
            $table->enum('kodeAsuransi', ['LN', 'DN']);
            $table->decimal('nilaiAsuransi', 24, 2);
            $table->decimal('bruto', 24, 4);
            $table->decimal('netto', 24, 4);
            $table->decimal('cif', 24, 2);
            $table->decimal('nilaiVD', 24, 4);
            $table->enum('kodeIncoterm', [
                'CFR',
                'CIF',
                'CIP',
                'CPT',
                'DAF',
                'DAP',
                'DAT',
                'DDP',
                'DDU',
                'DEQ',
                'DES',
                'EXW',
                'FAS',
                'FCA',
                'FOB',
                'LAN'
            ]);
            $table->decimal('nilaiIncoterm', 24, 2);
            $table->decimal('biayaTambahan', 24, 2);
            $table->decimal('diskon', 24, 2);
            $table->char('kodeValuta', 3)->nullable();
            $table->char('nomorAju', 26)->unique();
            $table->foreign('kodeValuta')->references('kodeValuta')->on('valuta')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('transaksi');
        }
    };
