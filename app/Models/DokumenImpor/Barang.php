<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\HS;
use App\Models\DataMaster\JenisKemasan;
use App\Models\DataMaster\Negara;
use App\Models\DataMaster\SatuanBarang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
    {
    use HasFactory;

    protected $primaryKey = 'barangId';
    protected $table = 'barang';

    protected $fillable = [
        'kondisiBarang',
        'beratBersih',
        'tipe',
        'ukuran',
        'spesifikasiLain',
        'kodeBarang',
        'uraian',
        'merk',
        'asuransi',
        'voluntaryDeclaration',
        'nilaiSatuan',
        'pernyataanLartas',
        'hargaSatuan',
        'jenisNilai',
        'jatuhTempo',
        'freight',
        'fob',
        'amountDAT',
        'cif',
        'biayaTambahanDiskon',
        'nilaiKemasan',
        'kodeSatuanBarang',
        'kodeHS',
        'kodeNegara',
        'kodeJenisKemasan',
        'nomorAju',
    ];

    public function satuanBarang()
        {
        return $this->belongsTo(SatuanBarang::class, 'kodeSatuanBarang', 'kodeSatuanBarang');
        }

    public function hs()
        {
        return $this->belongsTo(HS::class, 'kodeHS', 'kodeHS');
        }

    public function negara()
        {
        return $this->belongsTo(Negara::class, 'kodeNegara', 'kodeNegara');
        }

    public function jenisKemasan()
        {
        return $this->belongsTo(JenisKemasan::class, 'kodeJenisKemasan', 'kodeJenisKemasan');
        }

    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }

