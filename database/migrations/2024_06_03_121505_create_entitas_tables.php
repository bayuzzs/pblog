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
        Schema::create('importir', function (Blueprint $table) {
            $table->id('entitasId');
            $table->enum('jenisIdentitas', ['0', '1', '2', '3', '4', '5']);
            $table->char('noIdentitas', 20);
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jenisApi', ['01', '02']);
            $table->char('noApi', 10);
            $table->char('nomorAju', 26)->nullable()->unique();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('pemilik_barang', function (Blueprint $table) {
            $table->id('entitasId');
            $table->enum('jenisIdentitas', ['0', '1', '2', '3', '4', '5']);
            $table->char('noIdentitas', 20);
            $table->string('nama');
            $table->string('alamat');
            $table->char('nomorAju', 26)->nullable()->unique();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('npwp_pemusatan', function (Blueprint $table) {
            $table->id('entitasId');
            $table->enum('jenisIdentitas', ['0', '1', '2', '3', '4', '5']);
            $table->char('noIdentitas', 20);
            $table->string('nama');
            $table->string('alamat');
            $table->char('nomorAju', 26)->nullable()->unique();
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('pengirim', function (Blueprint $table) {
            $table->id('entitasId');
            $table->string('nama');
            $table->string('alamat');
            $table->char('kodeNegara', 2)->nullable();
            $table->char('nomorAju', 26)->nullable()->unique();
            $table->foreign('kodeNegara')->references('kodeNegara')->on('negara')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('penjual', function (Blueprint $table) {
            $table->id('entitasId');
            $table->string('nama');
            $table->string('alamat');
            $table->char('kodeNegara', 2)->nullable();
            $table->char('nomorAju', 26)->nullable()->unique();
            $table->foreign('kodeNegara')->references('kodeNegara')->on('negara')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('nomorAju')->references('nomorAju')->on('dokumen_impor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('importir');
        Schema::dropIfExists('pemilik_barang');
        Schema::dropIfExists('npwp_pemusatan');
        Schema::dropIfExists('pengirim');
        Schema::dropIfExists('penjual');
        }
    };
