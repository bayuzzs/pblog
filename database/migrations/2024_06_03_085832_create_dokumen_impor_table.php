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
        Schema::create('dokumen_impor', function (Blueprint $table) {
            $table->char('nomorAju', 26)->primary();
            $table->string('string');
            $table->string('asalBarang');
            $table->string('tujuanBarang');
            $table->string('jenisDokumen');
            $table->boolean('isBerwujud');
            $table->enum('jenisPib', ['1', '2'])->nullable();
            $table->enum('jenisImpor', ['1', '2', '3', '4', '5', '6', '7'])->nullable();
            $table->enum('caraBayar', [
                '1',
                '2',
                '3',
                '4',
                '5',
                '6',
                '7',
                '8',
                '9',
                '10',
                '11',
                '12',
                '13',
                '14',
                '15',
                '16',
                '17'
            ])->nullable();
            $table->char('kodeKantor', 6)->nullable();
            $table->char('kodePelabuhan', 4)->nullable();
            $table->char('npwp', 16)->nullable();
            $table->foreign('kodeKantor')->references('kodeKantor')->on('kantor')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('kodePelabuhan')->references('kodePelabuhan')->on('pelabuhan')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('npwp')->references('npwp')->on('pengimpor')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('dokumen_impor');
        }
    };
