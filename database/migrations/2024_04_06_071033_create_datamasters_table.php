<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hs', function (Blueprint $table) {
            $table->integer('kodeHS', 10)->primary();
            $table->string('uraianBarangBahasa');
            $table->string('uraianBarangEnglish');
            $table->boolean('isLartas');
        });

        Schema::create('valuta', function (Blueprint $table) {
            $table->string('kodeValuta', 3)->primary();
            $table->string('namaValuta');
            $table->integer('kurs');
        });

        Schema::create('jeniskemasan', function (Blueprint $table) {
            $table->string('kodeKemasan', 2)->primary();
            $table->string('namaKemasan');
        });

        Schema::create('jenisdokumen', function (Blueprint $table) {
            $table->string('kodeJenisDokumen', 5)->primary();
            $table->string('namaDokumen');
        });

        Schema::create('pelabuhan', function (Blueprint $table) {
            $table->string('kodeKantor', 6)->primary();
            $table->string('namaKantor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hs');
        Schema::dropIfExists('valuta');
        Schema::dropIfExists('jeniskemasan');
        Schema::dropIfExists('jenisdokumen');
        Schema::dropIfExists('pelabuhan');
    }
};
