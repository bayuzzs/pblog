<?php

namespace App\Models\DokumenImpor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontainer extends Model
    {
    use HasFactory;

    protected $primaryKey = 'kontainerId';
    protected $table = 'kontainer';

    protected $fillable = [
        'seri',
        'nomor',
        'ukuran',
        'jenis',
        'tipe',
        'nomorAju',
    ];

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    public function printUkuran()
        {
        $ukuran = [
            "20" => "20 Feet",
            "40" => "40 Feet",
            "45" => "45 Feet",
            "60" => "20 Feet",
        ];
        return $ukuran[$this->ukuran];
        }
    public function printJenis()
        {
        $jenis = [
            "4" => "4 - Empty",
            "7" => "7 - LCL",
            "8" => "8 - FCL",
        ];
        return $jenis[$this->jenis];
        }

    public function printTipe()
        {
        $tipe = [
            1  => '1 - General/Dry Cargo',
            2  => '2 - Tunne Type',
            3  => '3 - Open Top Steel',
            4  => '4 - Flat Rack',
            5  => '5 - Reefer/Refregete',
            6  => '6 - Barge Container',
            7  => '7 - Bulk Container',
            8  => '8 - Isotank',
            99 => '99 - Lain-lain',
        ];
        return $tipe[$this->tipe];
        }
    }

