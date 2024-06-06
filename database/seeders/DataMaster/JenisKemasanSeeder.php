<?php

namespace Database\Seeders\DataMaster;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKemasanSeeder extends Seeder
    {
    /**
     * Run the database seeds.
     */
    public function run() : void
        {
        $kemasan = [
            ['kodeJenisKemasan' => '1A', 'namaKemasan' => 'Drum, steel'],
            ['kodeJenisKemasan' => '1B', 'namaKemasan' => 'Drum, aluminium'],
            ['kodeJenisKemasan' => '1D', 'namaKemasan' => 'Drum, plywood'],
            ['kodeJenisKemasan' => '1F', 'namaKemasan' => 'Container, flexible'],
            ['kodeJenisKemasan' => '1G', 'namaKemasan' => 'Drum, fibre'],
            ['kodeJenisKemasan' => '1W', 'namaKemasan' => 'Drum, wooden'],
            ['kodeJenisKemasan' => '2C', 'namaKemasan' => 'Barrel, wooden'],
            ['kodeJenisKemasan' => '3A', 'namaKemasan' => 'Jerrican, steel'],
            ['kodeJenisKemasan' => '3H', 'namaKemasan' => 'Jerrican, plastic'],
            ['kodeJenisKemasan' => '43', 'namaKemasan' => 'Bag, super bulk'],
            ['kodeJenisKemasan' => '44', 'namaKemasan' => 'Bag, polybag'],
            ['kodeJenisKemasan' => '4A', 'namaKemasan' => 'Box, steel'],
            ['kodeJenisKemasan' => '4B', 'namaKemasan' => 'Box, aluminium'],
            ['kodeJenisKemasan' => '4C', 'namaKemasan' => 'Box, natural wood'],
            ['kodeJenisKemasan' => '4D', 'namaKemasan' => 'Box, plywood'],
            ['kodeJenisKemasan' => '4F', 'namaKemasan' => 'Box, reconstituted wood'],
            ['kodeJenisKemasan' => '4G', 'namaKemasan' => 'Box, fibreboard'],
            ['kodeJenisKemasan' => '4H', 'namaKemasan' => 'Box, plastic'],
            ['kodeJenisKemasan' => '5H', 'namaKemasan' => 'Bag, woven plastic'],
            ['kodeJenisKemasan' => '5L', 'namaKemasan' => 'Bag, textile'],
            ['kodeJenisKemasan' => '5M', 'namaKemasan' => 'Bag, paper'],
            ['kodeJenisKemasan' => '6H', 'namaKemasan' => 'Composite packaging, plastic receptacle'],
            ['kodeJenisKemasan' => '6P', 'namaKemasan' => 'Composite packaging, glass receptacle'],
            ['kodeJenisKemasan' => '7A', 'namaKemasan' => 'Case, car'],
            ['kodeJenisKemasan' => '7B', 'namaKemasan' => 'Case, wooden'],
            ['kodeJenisKemasan' => '8A', 'namaKemasan' => 'Pallet, wooden'],
            ['kodeJenisKemasan' => '8B', 'namaKemasan' => 'Crate, wooden'],
            ['kodeJenisKemasan' => '8C', 'namaKemasan' => 'Bundle, wooden'],
            ['kodeJenisKemasan' => 'AA', 'namaKemasan' => 'Intermediate bulk container, rigid plastic'],
            ['kodeJenisKemasan' => 'AB', 'namaKemasan' => 'Receptacle, fibre'],
            ['kodeJenisKemasan' => 'AC', 'namaKemasan' => 'Receptacle, paper'],
            ['kodeJenisKemasan' => 'AD', 'namaKemasan' => 'Receptacle, wooden'],
            ['kodeJenisKemasan' => 'AE', 'namaKemasan' => 'Aerosol'],
            ['kodeJenisKemasan' => 'AF', 'namaKemasan' => 'Pallet, modular, collars 80cms * 60cms'],
            ['kodeJenisKemasan' => 'AG', 'namaKemasan' => 'Pallet, shrinkwrapped'],
            ['kodeJenisKemasan' => 'AH', 'namaKemasan' => 'Pallet, 100cms * 110cms'],
            ['kodeJenisKemasan' => 'AI', 'namaKemasan' => 'Clamshell'],
            ['kodeJenisKemasan' => 'AJ', 'namaKemasan' => 'Cone'],
            ['kodeJenisKemasan' => 'AL', 'namaKemasan' => 'Ball'],
            ['kodeJenisKemasan' => 'AM', 'namaKemasan' => 'Ampoule, non protected'],
            ['kodeJenisKemasan' => 'AP', 'namaKemasan' => 'Ampoule, protected'],
            ['kodeJenisKemasan' => 'AT', 'namaKemasan' => 'Atomizer'],
            ['kodeJenisKemasan' => 'AV', 'namaKemasan' => 'Capsule'],
            ['kodeJenisKemasan' => 'B4', 'namaKemasan' => 'Belt'],
            ['kodeJenisKemasan' => 'BA', 'namaKemasan' => 'Barrel'],
            ['kodeJenisKemasan' => 'BB', 'namaKemasan' => 'Bobbin'],
            ['kodeJenisKemasan' => 'BC', 'namaKemasan' => 'Bottlecrate, bottlerack'],
            ['kodeJenisKemasan' => 'BD', 'namaKemasan' => 'Board'],
            ['kodeJenisKemasan' => 'BE', 'namaKemasan' => 'Bundle'],
            ['kodeJenisKemasan' => 'BF', 'namaKemasan' => 'Balloon, non-protected'],
            ['kodeJenisKemasan' => 'BG', 'namaKemasan' => 'Bag'],
            ['kodeJenisKemasan' => 'BH', 'namaKemasan' => 'Bunch'],
            ['kodeJenisKemasan' => 'BI', 'namaKemasan' => 'Bin'],
            ['kodeJenisKemasan' => 'BJ', 'namaKemasan' => 'Bucket'],
            ['kodeJenisKemasan' => 'BK', 'namaKemasan' => 'Basket'],
            ['kodeJenisKemasan' => 'BL', 'namaKemasan' => 'Bale, compressed'],
            ['kodeJenisKemasan' => 'BM', 'namaKemasan' => 'Basin'],
            ['kodeJenisKemasan' => 'BN', 'namaKemasan' => 'Bale, non -compressed'],
            ['kodeJenisKemasan' => 'BO', 'namaKemasan' => 'Bottle, non-protected, cylindrical'],
            ['kodeJenisKemasan' => 'BP', 'namaKemasan' => 'Balloon, protected'],
            ['kodeJenisKemasan' => 'BQ', 'namaKemasan' => 'Bottle, protected cylindrical'],
            ['kodeJenisKemasan' => 'BR', 'namaKemasan' => 'Bar'],
            ['kodeJenisKemasan' => 'BS', 'namaKemasan' => 'Bottle, non-protected, bulbous'],
            ['kodeJenisKemasan' => 'BT', 'namaKemasan' => 'Bolt'],
            ['kodeJenisKemasan' => 'BU', 'namaKemasan' => 'Butt'],
            ['kodeJenisKemasan' => 'BV', 'namaKemasan' => 'Bottle, protected bulbous'],
            ['kodeJenisKemasan' => 'BW', 'namaKemasan' => 'Box, for liquids'],
            ['kodeJenisKemasan' => 'BX', 'namaKemasan' => 'Box'],
            ['kodeJenisKemasan' => 'BY', 'namaKemasan' => 'Board, in bundle/bunch/truss'],
            ['kodeJenisKemasan' => 'BZ', 'namaKemasan' => 'Bars, in bundle/bunch/truss'],
            ['kodeJenisKemasan' => 'CA', 'namaKemasan' => 'Can, rectangular'],
            ['kodeJenisKemasan' => 'CB', 'namaKemasan' => 'Beer crate'],
            ['kodeJenisKemasan' => 'CC', 'namaKemasan' => 'Churn'],
            ['kodeJenisKemasan' => 'CD', 'namaKemasan' => 'Can, with handle and spout'],
            ['kodeJenisKemasan' => 'CE', 'namaKemasan' => 'Creel'],
            ['kodeJenisKemasan' => 'CF', 'namaKemasan' => 'Coffer'],
            ['kodeJenisKemasan' => 'CG', 'namaKemasan' => 'Cage'],
            ['kodeJenisKemasan' => 'CH', 'namaKemasan' => 'Chest'],
            ['kodeJenisKemasan' => 'CI', 'namaKemasan' => 'Canister'],
            ['kodeJenisKemasan' => 'CJ', 'namaKemasan' => 'Coffin'],
        ];
        $kemasan = array_unique($kemasan, SORT_REGULAR);
        DB::table('jenis_kemasan')->insert($kemasan);
        }
    }
