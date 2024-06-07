<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\JenisKemasan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemasan extends Model
    {
    use HasFactory;

    protected $primaryKey = 'kemasanId';
    protected $table = 'kemasan';

    protected $fillable = [
        'seri',
        'merek',
        'jumlah',
        'kodeJenisKemasan',
        'nomorAju',
    ];

    // Relasi dengan tabel 'jenis_kemasan' melalui 'kodeJenisKemasan'
    public function jenisKemasan()
        {
        return $this->belongsTo(JenisKemasan::class, 'kodeJenisKemasan', 'kodeJenisKemasan');
        }

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }
