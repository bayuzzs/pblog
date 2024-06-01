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
        $faker    = \Faker\Factory::create();
        $npwpList = [];

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
        for ( $i = 0; $i < 30; $i++ ) {
            do {
                $npwp = substr(str_shuffle('123456789012343') . $i, 0, 16);

                if ( ! in_array($npwp, $npwpList) ) {
                    array_push($npwpList, $npwp);
                    break;
                    }
                } while ( true );
            \App\Models\Pengimpor::create([
                'npwp'              => $npwpList[$i],
                'namaPerusahaan'    => $faker->company,
                'alamatPerusahaan'  => $faker->address,
                'teleponPerusahaan' => $faker->numerify('123456789012'),
                'username'          => $faker->unique()->userName,
                'password'          => $faker->password,
                'nama'              => $faker->name,
                'email'             => $faker->unique()->email,
                'telepon'           => $faker->numerify('123456789012'),
            ]);
            }

        for ( $i = 10; $i < 30; $i++ ) {
            \App\Models\DataMaster\HS::create([
                'kodeHs'              => sprintf('%010d', $i + 1),
                'uraianBarangBahasa'  => $faker->sentence(),
                'uraianBarangEnglish' => $faker->sentence(),
                'isLartas'            => 0,
            ]);

            \App\Models\DataMaster\Negara::create([
                'kodeNegara' => $faker->unique()->countryCode,
                'namaNegara' => $faker->country,
            ]);

            \App\Models\DataMaster\Valuta::create([
                'kodeValuta' => $faker->unique()->currencyCode,
                'namaValuta' => $faker->currencyCode(),
                'kurs'       => $faker->randomFloat(2, 0.1, 1.5),
            ]);

            \App\Models\DataMaster\JenisKemasan::create([
                'kodeKemasan' => $i,
                'namaKemasan' => $faker->word,
            ]);

            \App\Models\DataMaster\JenisDokumen::create([
                'kodeJenisDokumen' => $i,
                'namaDokumen'      => $faker->word,
            ]);

            \App\Models\DataMaster\SatuanBarang::create([
                'kodeSatuanBarang' => $i,
                'namaSatuanBarang' => $faker->word,
            ]);

            \App\Models\DataMaster\Pelabuhan::create([
                'kodePelabuhan' => $i,
                'namaPelabuhan' => $faker->city,
            ]);


            \App\Models\DataMaster\Kantor::create([
                'kodeKantor' => $i,
                'namaKantor' => $faker->company,
            ]);
            }

        \App\Models\Petugas::create([
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
        ]);
        }
    }
