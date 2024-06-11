<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\Negara;
use App\Models\DataMaster\Pelabuhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengangkutan extends Model
    {
    use HasFactory;

    protected $primaryKey = 'pengangkutanId';

    protected $table = 'pengangkutan';

    protected $fillable = [
        'kodeTutupPu',
        'nomorBc',
        'tanggalBc',
        'nomorPosBc',
        'nomorSubPosBc',
        'namaPengangkut',
        'nomorPengangkut',
        'kodeCaraAngkut',
        'tanggalTiba',
        'kodeTps',
        'kodePelTransit',
        'kodePelMuat',
        'kodePelTujuan',
        'kodeBendera',
        'nomorAju',
    ];

    protected $casts = [
        'kodeTutupPu'    => 'string',
        'kodeCaraAngkut' => 'string',
    ];

    private $caraAngkutEnum = [
        1 => "LAUT",
        2 => "KERETA API",
        3 => "DARAT",
        4 => "UDARA",
        5 => "POS",
        6 => "MULTIMODA",
        7 => "INSTALASI / PIPA",
        8 => "PERAIRAN",
        9 => "LAINNYA"
    ];

    public function printCaraAngkut( $kodeCaraAngkut )
        {
        return $this->caraAngkutEnum[$kodeCaraAngkut];
        }


    public function pelabuhanTransit()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelTransit', 'kodePelabuhan');
        }

    public function pelabuhanMuat()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelMuat', 'kodePelabuhan');
        }

    public function pelabuhanTujuan()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelTujuan', 'kodePelabuhan');
        }

    public function negara()
        {
        return $this->belongsTo(Negara::class, 'kodeBendera', 'kodeNegara');
        }

    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }
