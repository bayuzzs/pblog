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
        Schema::create('barang', function (Blueprint $table) {
            $table->id('barangId');
            $table->enum('kondisiBarang', ['1', '2', '3', '4', '5', '6', '7', '8']);
            $table->decimal('beratBersih', 24, 4);
            $table->string('tipe', 50);
            $table->integer('ukuran')->length(5);
            $table->string('spesifikasiLain');
            $table->string('kodeBarang');
            $table->string('uraian');
            $table->string('merk');
            $table->decimal('asuransi', 24, 4);
            $table->decimal('voluntaryDeclaration', 24, 4);
            $table->integer('nilaiSatuan');
            $table->boolean('pernyataanLartas');
            $table->decimal('hargaSatuan', 24, 2);
            $table->enum('jenisNilai', [
                "BTR",
                "CAM",
                "CMA",
                "FTR",
                "HBH",
                "ITM",
                "KON",
                "LES",
                "NTR",
                "PRO",
                "ROY",
                "TIP"
            ]);
            $table->date('jatuhTempo');
            $table->decimal('freight', 24, 2);
            $table->decimal('fob', 24, 2);
            $table->decimal('amountDAT', 24, 2);
            $table->decimal('cif', 24, 2);
            $table->decimal('biayaTambahanDiskon', 24, 2);
            $table->integer('nilaiKemasan');
            $table->char('kodeSatuanBarang', 3)->nullable();
            $table->char('kodeHs', 10)->nullable();
            $table->char('kodeNegara', 2)->nullable();
            $table->char('kodeKemasan', 2)->nullable();
            $table->bigInteger('dokumenPendukungId')->unsigned()->nullable();
            $table->char('nomorAju', 26);
            $table->foreign('kodeSatuanBarang')->references('kodeSatuanBarang')->on('satuan_barang')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodeHs')->references('kodeHS')->on('hs')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodeNegara')->references('kodeNegara')->on('negara')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodeKemasan')->references('kodeKemasan')->on('jenis_kemasan')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('dokumenPendukungId')->references('dokumenPendukungId')->on('dokumen_pendukung')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('barang');
        }
    };
