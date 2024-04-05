<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
    {
    /**
     * Seed the application's database.
     */
    public function run() : void
        {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Pengimpor::create([
            'npwp'              => '1234567890123456',
            'namaPerusahaan'    => 'Pengimpor',
            'alamatPerusahaan'  => 'Jl. Raya Cibodas No. 1',
            'teleponPerusahaan' => '1234567890',
            'username'          => 'pengimpor',
            'password'          => Hash::make('pengimpor'),
            'nama'              => 'Pengimpor',
            'email'             => 'qgN8I@example.com',
            'telepon'           => '1234567890',
        ]);

        \App\Models\Petugas::create([
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
        ]);
        }
    }
