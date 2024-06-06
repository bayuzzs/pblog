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
    }

