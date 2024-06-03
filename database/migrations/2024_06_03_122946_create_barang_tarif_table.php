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
        Schema::create('barang_tarif', function (Blueprint $table) {
            $table->id('barangTarifId');
            $table->enum('jenisPungutan', [
                'BK',
                'BM',
                'BMAD',
                'BMI',
                'BMKITE',
                'BMP',
                'BMTP',
                'CEA',
                'CMEA',
                'CTEM',
                'DENDA',
                'DS',
                'PNBP',
                'PPH',
                'PPHEKSPOR',
                'PPN',
                'PPNBM',
                'PPNLOKAL'
            ]);
            $table->enum('kodeFasilitasTarif', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']);
            $table->enum('jenisTarif', ['0', '1']);
            $table->decimal('jumlahSatuan', 24, 2);
            $table->boolean('isSementara');
            $table->decimal('nilaiBayar', 24, 2);
            $table->bigInteger('barangId')->unsigned()->nullable();
            $table->bigInteger('dokumenPendukungId')->unsigned()->nullable();
            $table->foreign('barangId')->references('barangId')->on('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dokumenPendukungId')->references('dokumenPendukungId')->on('dokumen_pendukung')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('barang_tarif');
        }
    };
