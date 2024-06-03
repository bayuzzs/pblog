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
        Schema::create('kemasan', function (Blueprint $table) {
            $table->id('kemasanId');
            $table->string('seri');
            $table->string('merek');
            $table->integer('jumlah');
            $table->char('kodeKemasan', 2)->nullable();
            $table->foreign('kodeKemasan')->references('kodeKemasan')->on('jenis_kemasan')->onDelete('set null')->onUpdate('cascade');
            $table->char('nomorAju', 26)->nullable();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('kontainer', function (Blueprint $table) {
            $table->id('kontainerId');
            $table->char('seri');
            $table->string('nomor');
            $table->enum('ukuran', ['20', '40', '45', '60']);
            $table->enum('jenis', ['4', '7', '8']);
            $table->enum('tipe', ['1', '2', '3', '4', '5', '6', '7', '8', '99']);
            $table->char('nomorAju', 26)->nullable();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('kemasan');
        Schema::dropIfExists('kontainer');
        }
    };
