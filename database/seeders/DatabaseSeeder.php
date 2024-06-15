<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DataMaster\Pelabuhan;
use Database\Seeders\DataMaster\HSSeeder;
use Database\Seeders\DataMaster\JenisDokumen;
use Database\Seeders\DataMaster\JenisDokumenSeeder;
use Database\Seeders\DataMaster\JenisKemasanSeeder;
use Database\Seeders\DataMaster\KantorSeeder;
use Database\Seeders\DataMaster\NegaraSeeder;
use Database\Seeders\DataMaster\PelabuhanSeeder;
use Database\Seeders\DataMaster\SatuanBarangSeeder;
use Database\Seeders\DataMaster\ValutaSeeder;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
    {
    /**
     * Seed the application's database.
     */
    public function run() : void
        {
        $faker = \Faker\Factory::create();

        \App\Models\Pengimpor::create([
            'npwp'              => '1234567890123456',
            'namaPerusahaan'    => 'Pengimpor',
            'alamatPerusahaan'  => 'Jl. Raya Cibodas No. 1',
            'teleponPerusahaan' => '1234567890',
            'username'          => 'pengimpor',
            'password'          => Hash::make('pengimpor'),
            'nama'              => 'Pengimpor',
            'email'             => 'babayu@email.com',
            'telepon'           => '1234567890',
        ]);

        \App\Models\Petugas::create([
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
        ]);

        $this->call([
            NegaraSeeder::class,
            ValutaSeeder::class,
            JenisKemasanSeeder::class,
            SatuanBarangSeeder::class,
            JenisDokumenSeeder::class,
            KantorSeeder::class,
            PelabuhanSeeder::class,
            HSSeeder::class,
        ]);
        }
    }
