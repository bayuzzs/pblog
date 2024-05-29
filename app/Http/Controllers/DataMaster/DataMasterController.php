<?php

namespace App\Http\Controllers\DataMaster;

use App\Http\Controllers\Controller;
use App\Models\DataMaster\HS;
use App\Models\DataMaster\JenisDokumen;
use App\Models\DataMaster\JenisKemasan;
use App\Models\DataMaster\Kantor;
use App\Models\DataMaster\Negara;
use App\Models\DataMaster\Pelabuhan;
use App\Models\DataMaster\SatuanBarang;
use App\Models\DataMaster\Valuta;
use Illuminate\Http\Request;

class DataMasterController extends Controller
    {
    public static function getAllDataMasterCount() : array
        {
        $dataMasters = [
            [
                'name'  => 'HS',
                'value' => HS::all()->count(),
                'route' => route('data-master.hs'),
            ],
            [
                'name'  => 'Negara',
                'value' => Negara::all()->count(),
                'route' => route('data-master.negara'),
            ],
            [
                'name'  => 'Valuta',
                'value' => Valuta::all()->count(),
                'route' => route('data-master.valuta'),
            ],
            [
                'name'  => 'Jenis Kemasan',
                'value' => JenisKemasan::all()->count(),
                'route' => route('data-master.jenis-kemasan'),
            ],
            [
                'name'  => 'Jenis Dokumen',
                'value' => JenisDokumen::all()->count(),
                'route' => route('data-master.jenis-dokumen'),
            ],
            [
                'name'  => 'Satuan Barang',
                'value' => SatuanBarang::all()->count(),
                'route' => route('data-master.satuan-barang'),
            ],
            [
                'name'  => 'Pelabuhan',
                'value' => Pelabuhan::all()->count(),
                'route' => route('data-master.pelabuhan'),
            ],
            [
                'name'  => 'Kantor',
                'value' => Kantor::all()->count(),
                'route' => route('data-master.kantor'),
            ],
        ];
        return $dataMasters;
        }
    }
