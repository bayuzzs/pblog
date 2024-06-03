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
        Schema::create('grand_pungutan', function (Blueprint $table) {
            $table->id('pungutanId');
            $table->enum('keterangan', ['BM', 'BMT', 'CUKAI', 'PPH', 'PPN']);
            $table->char('nomorAju', 26);
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('grand_pungutan');
        }
    };
