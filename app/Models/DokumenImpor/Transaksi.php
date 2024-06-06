<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\Valuta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
    {
    use HasFactory;

    protected $primaryKey = 'transaksiId';
    protected $table = 'transaksi';

    protected $fillable = [
        'ndpbm',
        'freight',
        'kodeJenisTransaksi',
        'kodeAsuransi',
        'nilaiAsuransi',
        'bruto',
        'netto',
        'cif',
        'nilaiVD',
        'kodeIncoterm',
        'nilaiIncoterm',
        'biayaTambahan',
        'diskon',
        'kodeValuta',
        'nomorAju',
    ];

    // Relasi dengan tabel 'valuta' melalui 'kodeValuta'
    public function valuta()
        {
        return $this->belongsTo(Valuta::class, 'kodeValuta', 'kodeValuta');
        }

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }

