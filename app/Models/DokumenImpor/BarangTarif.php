<?php

namespace App\Models\DokumenImpor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangTarif extends Model
    {
    use HasFactory;

    protected $primaryKey = 'barangTarifId';
    protected $table = 'barang_tarif';

    protected $fillable = [
        'barangId',
        'keterangan',
        'telahDilunasi',
        'dibebaskan',
        'tidakDipungut',
        'ditunda',
        'ditanggungPemerintah',
        'dibayar',
        'dokumenPendukungId',
    ];

    public function barang()
        {
        return $this->belongsTo(Barang::class, 'barangId', 'barangId');
        }

    public function dokumenPendukung()
        {
        return $this->belongsTo(DokumenPendukung::class, 'dokumenPendukungId', 'dokumenPendukungId');
        }
    }

