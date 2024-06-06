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
        Schema::create('dokumen_pendukung', function (Blueprint $table) {
            $table->id('dokumenPendukungId');
            $table->string('nomor');
            $table->string('seri');
            $table->date('tanggal');
            $table->char('kodeJenisDokumen', 5)->nullable();
            $table->char('nomorAju', 26);
            $table->foreign('kodeJenisDokumen')->references('kodeJenisDokumen')->on('jenis_dokumen')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('dokumen_pendukung');
        }
    };
