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
            ['KodeHs' => '010112100', 'uraianBarangBahasa' => '--Bibit', 'uraianBarangEnglish' => '--Pure bred breeding animals', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '010130', 'uraianBarangBahasa' => '-Keledai', 'uraianBarangEnglish' => '-Asses:', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '01051110', 'uraianBarangBahasa' => '---Ayam bibit', 'uraianBarangEnglish' => '--Breeding fowls', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '01051290', 'uraianBarangBahasa' => '---lain-lain', 'uraianBarangEnglish' => '---other', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '01051210', 'uraianBarangBahasa' => '---Kalkun bibit', 'uraianBarangEnglish' => '---Breeding turkeys', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '010514', 'uraianBarangBahasa' => '--Angsa:', 'uraianBarangEnglish' => '--Geese:', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '10019100', 'uraianBarangBahasa' => '--Benih', 'uraianBarangEnglish' => '--Seed', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '10019912', 'uraianBarangBahasa' => '----Meslin', 'uraianBarangEnglish' => '----Meslin', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '20041000', 'uraianBarangBahasa' => '- Kentang', 'uraianBarangEnglish' => '- Potatoes', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '20049010', 'uraianBarangBahasa' => '- Kentang', 'uraianBarangEnglish' => '- Potatoes', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '30024200', 'uraianBarangBahasa' => '- - Vaksin untuk obat hewan', 'uraianBarangEnglish' => '- - Vaccines for veterinary medicine', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '30024110', 'uraianBarangBahasa' => '- - - Toksoid tetanus', 'uraianBarangEnglish' => '- - - Tetanus toxoid', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '40012230', 'uraianBarangBahasa' => '- - Mengandung efedrin atau garamnya', 'uraianBarangEnglish' => '- - Containing ephedrine or its salts', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '30034100', 'uraianBarangBahasa' => '- - - TSNR L', 'uraianBarangEnglish' => '- - Containing ephedrine or its salts', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '40012920', 'uraianBarangBahasa' => '- - - Latex crepe', 'uraianBarangEnglish' => '- - - TSNR L', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '51011100', 'uraianBarangBahasa' => '- - Wol cukur', 'uraianBarangEnglish' => '- - Shorn wool', 'isLartas' => '0', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '50079030', 'uraianBarangBahasa' => '- - Dicetak dengan proses batik tradisional', 'uraianBarangEnglish' => '- - Printed by the traditional batik process', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50'],
            ['KodeHs' => '70049010', 'uraianBarangBahasa' => '- - Kaca optik, tidak dikerjakan secara optik', 'uraianBarangEnglish' => '- - Optical glass, not optically worked', 'isLartas' => '1', 'pphApi' => '2.50', 'pphNonApi' => '7.50']
        ];

        DB::table('hs')->insert($hs);
        }
    }
