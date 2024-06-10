<?php

namespace Database\Seeders\DataMaster;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HSSeeder extends Seeder
    {
    /**
     * Run the database seeds.
     */
    public function run() : void
        {
        $hs = [
            ['KodeHs' => '010112100', 'uraianBarangBahasa' => '--Bibit'],
            ['KodeHs' => '010130', 'uraianBarangBahasa' => '-Keledai'],
            ['KodeHs' => '01051110', 'uraianBarangBahasa' => '---Ayam bibit'],
            ['KodeHs' => '01051290', 'uraianBarangBahasa' => '---lain-lain'],
            ['KodeHs' => '01051210', 'uraianBarangBahasa' => '---Kalkun bibit'],
            ['KodeHs' => '010514', 'uraianBarangBahasa' => '--Angsa:'],
            ['KodeHs' => '10019100', 'uraianBarangBahasa' => '--Benih'],
            ['KodeHs' => '10019912', 'uraianBarangBahasa' => '----Meslin'],
            ['KodeHs' => '20041000', 'uraianBarangBahasa' => '- Kentang'],
        ];

        DB::table('hs')->insert($hs);
        }
    }
