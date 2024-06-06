<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\JenisDokumen;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPendukung extends Model
    {
    use HasFactory;

    protected $primaryKey = 'dokumenPendukungId';
    protected $table = 'dokumen_pendukung';

    protected $fillable = [
        'nomor',
        'seri',
        'tanggal',
        'kodeJenisDokumen',
        'nomorAju',
    ];

    // Relasi dengan tabel 'jenis_dokumen' melalui 'kodeJenisDokumen'
    public function jenisDokumen()
        {
        return $this->belongsTo(JenisDokumen::class, 'kodeJenisDokumen', 'kodeJenisDokumen');
        }

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }

