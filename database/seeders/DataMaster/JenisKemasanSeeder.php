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
            ['kodeKemasan' => '1A', 'namaKemasan' => 'Drum, steel'],
            ['kodeKemasan' => '1B', 'namaKemasan' => 'Drum, aluminium'],
            ['kodeKemasan' => '1D', 'namaKemasan' => 'Drum, plywood'],
            ['kodeKemasan' => '1F', 'namaKemasan' => 'Container, flexible'],
            ['kodeKemasan' => '1G', 'namaKemasan' => 'Drum, fibre'],
            ['kodeKemasan' => '1W', 'namaKemasan' => 'Drum, wooden'],
            ['kodeKemasan' => '2C', 'namaKemasan' => 'Barrel, wooden'],
            ['kodeKemasan' => '3A', 'namaKemasan' => 'Jerrican, steel'],
            ['kodeKemasan' => '3H', 'namaKemasan' => 'Jerrican, plastic'],
            ['kodeKemasan' => '43', 'namaKemasan' => 'Bag, super bulk'],
            ['kodeKemasan' => '44', 'namaKemasan' => 'Bag, polybag'],
            ['kodeKemasan' => '4A', 'namaKemasan' => 'Box, steel'],
            ['kodeKemasan' => '4B', 'namaKemasan' => 'Box, aluminium'],
            ['kodeKemasan' => '4C', 'namaKemasan' => 'Box, natural wood'],
            ['kodeKemasan' => '4D', 'namaKemasan' => 'Box, plywood'],
            ['kodeKemasan' => '4F', 'namaKemasan' => 'Box, reconstituted wood'],
            ['kodeKemasan' => '4G', 'namaKemasan' => 'Box, fibreboard'],
            ['kodeKemasan' => '4H', 'namaKemasan' => 'Box, plastic'],
            ['kodeKemasan' => '5H', 'namaKemasan' => 'Bag, woven plastic'],
            ['kodeKemasan' => '5L', 'namaKemasan' => 'Bag, textile'],
            ['kodeKemasan' => '5M', 'namaKemasan' => 'Bag, paper'],
            ['kodeKemasan' => '6H', 'namaKemasan' => 'Composite packaging, plastic receptacle'],
            ['kodeKemasan' => '6P', 'namaKemasan' => 'Composite packaging, glass receptacle'],
            ['kodeKemasan' => '7A', 'namaKemasan' => 'Case, car'],
            ['kodeKemasan' => '7B', 'namaKemasan' => 'Case, wooden'],
            ['kodeKemasan' => '8A', 'namaKemasan' => 'Pallet, wooden'],
            ['kodeKemasan' => '8B', 'namaKemasan' => 'Crate, wooden'],
            ['kodeKemasan' => '8C', 'namaKemasan' => 'Bundle, wooden'],
            ['kodeKemasan' => 'AA', 'namaKemasan' => 'Intermediate bulk container, rigid plastic'],
            ['kodeKemasan' => 'AB', 'namaKemasan' => 'Receptacle, fibre'],
            ['kodeKemasan' => 'AC', 'namaKemasan' => 'Receptacle, paper'],
            ['kodeKemasan' => 'AD', 'namaKemasan' => 'Receptacle, wooden'],
            ['kodeKemasan' => 'AE', 'namaKemasan' => 'Aerosol'],
            ['kodeKemasan' => 'AF', 'namaKemasan' => 'Pallet, modular, collars 80cms * 60cms'],
            ['kodeKemasan' => 'AG', 'namaKemasan' => 'Pallet, shrinkwrapped'],
            ['kodeKemasan' => 'AH', 'namaKemasan' => 'Pallet, 100cms * 110cms'],
            ['kodeKemasan' => 'AI', 'namaKemasan' => 'Clamshell'],
            ['kodeKemasan' => 'AJ', 'namaKemasan' => 'Cone'],
            ['kodeKemasan' => 'AL', 'namaKemasan' => 'Ball'],
            ['kodeKemasan' => 'AM', 'namaKemasan' => 'Ampoule, non protected'],
            ['kodeKemasan' => 'AP', 'namaKemasan' => 'Ampoule, protected'],
            ['kodeKemasan' => 'AT', 'namaKemasan' => 'Atomizer'],
            ['kodeKemasan' => 'AV', 'namaKemasan' => 'Capsule'],
            ['kodeKemasan' => 'B4', 'namaKemasan' => 'Belt'],
            ['kodeKemasan' => 'BA', 'namaKemasan' => 'Barrel'],
            ['kodeKemasan' => 'BB', 'namaKemasan' => 'Bobbin'],
            ['kodeKemasan' => 'BC', 'namaKemasan' => 'Bottlecrate, bottlerack'],
            ['kodeKemasan' => 'BD', 'namaKemasan' => 'Board'],
            ['kodeKemasan' => 'BE', 'namaKemasan' => 'Bundle'],
            ['kodeKemasan' => 'BF', 'namaKemasan' => 'Balloon, non-protected'],
            ['kodeKemasan' => 'BG', 'namaKemasan' => 'Bag'],
            ['kodeKemasan' => 'BH', 'namaKemasan' => 'Bunch'],
            ['kodeKemasan' => 'BI', 'namaKemasan' => 'Bin'],
            ['kodeKemasan' => 'BJ', 'namaKemasan' => 'Bucket'],
            ['kodeKemasan' => 'BK', 'namaKemasan' => 'Basket'],
            ['kodeKemasan' => 'BL', 'namaKemasan' => 'Bale, compressed'],
            ['kodeKemasan' => 'BM', 'namaKemasan' => 'Basin'],
            ['kodeKemasan' => 'BN', 'namaKemasan' => 'Bale, non -compressed'],
            ['kodeKemasan' => 'BO', 'namaKemasan' => 'Bottle, non-protected, cylindrical'],
            ['kodeKemasan' => 'BP', 'namaKemasan' => 'Balloon, protected'],
            ['kodeKemasan' => 'BQ', 'namaKemasan' => 'Bottle, protected cylindrical'],
            ['kodeKemasan' => 'BR', 'namaKemasan' => 'Bar'],
            ['kodeKemasan' => 'BS', 'namaKemasan' => 'Bottle, non-protected, bulbous'],
            ['kodeKemasan' => 'BT', 'namaKemasan' => 'Bolt'],
            ['kodeKemasan' => 'BU', 'namaKemasan' => 'Butt'],
            ['kodeKemasan' => 'BV', 'namaKemasan' => 'Bottle, protected bulbous'],
            ['kodeKemasan' => 'BW', 'namaKemasan' => 'Box, for liquids'],
            ['kodeKemasan' => 'BX', 'namaKemasan' => 'Box'],
            ['kodeKemasan' => 'BY', 'namaKemasan' => 'Board, in bundle/bunch/truss'],
            ['kodeKemasan' => 'BZ', 'namaKemasan' => 'Bars, in bundle/bunch/truss'],
            ['kodeKemasan' => 'CA', 'namaKemasan' => 'Can, rectangular'],
            ['kodeKemasan' => 'CB', 'namaKemasan' => 'Beer crate'],
            ['kodeKemasan' => 'CC', 'namaKemasan' => 'Churn'],
            ['kodeKemasan' => 'CD', 'namaKemasan' => 'Can, with handle and spout'],
            ['kodeKemasan' => 'CE', 'namaKemasan' => 'Creel'],
            ['kodeKemasan' => 'CF', 'namaKemasan' => 'Coffer'],
            ['kodeKemasan' => 'CG', 'namaKemasan' => 'Cage'],
            ['kodeKemasan' => 'CH', 'namaKemasan' => 'Chest'],
            ['kodeKemasan' => 'CI', 'namaKemasan' => 'Canister'],
            ['kodeKemasan' => 'CJ', 'namaKemasan' => 'Coffin'],
        ];
        $kemasan = array_unique($kemasan, SORT_REGULAR);
        DB::table('jenis_kemasan')->insert($kemasan);
        }
    }
