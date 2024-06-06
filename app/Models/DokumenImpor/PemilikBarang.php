<?php

namespace App\Models\DokumenImpor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikBarang extends Model
    {
    use HasFactory;

    protected $primaryKey = 'entitasId';
    protected $table = 'pemilik_barang';

    protected $fillable = [
        'jenisIdentitas',
        'noIdentitas',
        'nama',
        'alamat',
        'nomorAju',
    ];

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }
