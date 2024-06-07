<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\Kantor;
use App\Models\DataMaster\Negara;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
    {
    use HasFactory;

    protected $primaryKey = 'entitasId';
    protected $table = 'pengirim';

    protected $fillable = [
        'nama',
        'alamat',
        'nomorAju',
        'kodeNegara',
    ];

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    public function negara()
        {
        return $this->belongsTo(Negara::class, 'kodeNegara', 'kodeNegara');
        }

    }

