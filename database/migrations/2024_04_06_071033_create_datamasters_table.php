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
        Schema::create('hs', function (Blueprint $table) {
            $table->char('kodeHS', 10)->primary();
            $table->string('uraianBarangBahasa');
            $table->decimal('pphApi', 5, 2)->default(0);
            $table->decimal('pphNonApi', 5, 2)->default(0);
            $table->timestamps();
            });

        Schema::create('valuta', function (Blueprint $table) {
            $table->char('kodeValuta', 3)->primary();
            $table->string('namaValuta');
            $table->decimal('kurs', 10, 4);
            $table->timestamps();
            });

        Schema::create('jenis_kemasan', function (Blueprint $table) {
            $table->char('kodeJenisKemasan', 2)->primary();
            $table->string('namaKemasan');
            $table->timestamps();
            });

        Schema::create('jenis_dokumen', function (Blueprint $table) {
            $table->char('kodeJenisDokumen', 5)->primary();
            $table->string('namaDokumen');
            $table->timestamps();
            });

        Schema::create('kantor', function (Blueprint $table) {
            $table->char('kodeKantor', 6)->primary();
            $table->string('namaKantor');
            $table->timestamps();
            });

        Schema::create('negara', function (Blueprint $table) {
            $table->char('kodeNegara', 2)->primary();
            $table->string('namaNegara');
            $table->timestamps();
            });

        Schema::create('pelabuhan', function (Blueprint $table) {
            $table->char('kodePelabuhan', 10)->primary();
            $table->string('namaPelabuhan');
            $table->string('namaNegara');
            $table->timestamps();
            });

        Schema::create('satuan_barang', function (Blueprint $table) {
            $table->char('kodeSatuanBarang', 3)->primary();
            $table->string('namaSatuanBarang');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('hs');
        Schema::dropIfExists('valuta');
        Schema::dropIfExists('jeniskemasan');
        Schema::dropIfExists('jenisdokumen');
        Schema::dropIfExists('kantor');
        Schema::dropIfExists('negara');
        Schema::dropIfExists('pelabuhan');
        Schema::dropIfExists('satuanbarang');
        }
    };
