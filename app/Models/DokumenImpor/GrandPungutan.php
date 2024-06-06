<?php

namespace App\Models\DokumenImpor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandPungutan extends Model
    {
    use HasFactory;

    protected $primaryKey = 'pungutanId';
    protected $table = 'grand_pungutan';

    protected $fillable = [
        'keterangan',
        'nomorAju',
    ];

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }

