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
        Schema::create('barang_dokumen', function (Blueprint $table) {
            $table->id('barangDokumenId');
            $table->char('nomorAju', 26);
            $table->bigInteger('barangId')->unsigned();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('barangId')->references('barangId')->on('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('barang_dokumen');
        }
    };
