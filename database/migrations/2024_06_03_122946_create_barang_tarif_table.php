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
            $table->enum('keterangan', ['BM', 'BMT', 'CUKAI', 'PPH', 'PPN']);
            $table->decimal('ditunda', 24, 4)->default(0);
            $table->decimal('dibayar', 24, 4)->default(0);
            $table->decimal('dibebaskan', 24, 4)->default(0);
            $table->decimal('tidakDipungut', 24, 4)->default(0);
            $table->decimal('telahDilunasi', 24, 4)->default(0);
            $table->decimal('ditanggungPemerintah', 24, 4)->default(0);
            $table->bigInteger('barangId')->unsigned()->nullable();
            $table->foreign('barangId')->references('barangId')->on('barang')->onDelete('cascade')->onUpdate('cascade');
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
