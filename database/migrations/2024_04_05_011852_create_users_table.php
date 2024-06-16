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
        Schema::create('pengimpor', function (Blueprint $table) {
            $table->string('npwp', 16)->primary();
            $table->string('namaPerusahaan');
            $table->text('alamatPerusahaan');
            $table->char('teleponPerusahaan', 13);
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('urlProfile')->nullable();
            $table->char('telepon', 13);
            $table->rememberToken();
            $table->timestamps();
            });

        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('petugasId');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
            });

        }

    /**
     * Reverse the migrations.
     */
    public function down() : void
        {
        Schema::dropIfExists('pengimpor');
        Schema::dropIfExists('petugas');
        }
    };
