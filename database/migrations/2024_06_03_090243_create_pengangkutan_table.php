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
        Schema::create('pengangkutan', function (Blueprint $table) {
            $table->id('pengangkutanId');
            $table->enum('kodeTutupPu', ['11', '12', '14']);
            $table->char('nomorBc', 6);
            $table->date('tanggalBc');
            $table->char('nomorPosBc', 4);
            $table->char('nomorSubPosBc', 8);
            $table->string('namaPengangkut');
            $table->string('nomorPengangkut');
            $table->enum('kodeCaraAngkut', ['1', '2', '3', '4', '5', '6', '7', '8', '9']);
            $table->date('tanggalTiba');
            $table->string('kodeTps');
            $table->char('kodePelTransit', 10)->nullable();
            $table->char('kodePelMuat', 10)->nullable();
            $table->char('kodePelTujuan', 10)->nullable();
            $table->char('kodeBendera', 2)->nullable();
            $table->char('nomorAju', 26);
            $table->foreign('kodePelTransit')->references('kodePelabuhan')->on('pelabuhan')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodePelMuat')->references('kodePelabuhan')->on('pelabuhan')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodePelTujuan')->references('kodePelabuhan')->on('pelabuhan')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodeBendera')->references('kodeNegara')->on('negara')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('pengangkutan');
        }
    };
