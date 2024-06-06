<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\Pelabuhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengangkutan extends Model
    {
    use HasFactory;

    // Menentukan primary key sebagai 'pengangkutanId'
    protected $primaryKey = 'pengangkutanId';

    // Menentukan nama tabel jika berbeda dengan konvensi nama tabel
    protected $table = 'pengangkutan';

    // Menentukan kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'kodeTutupPu',
        'nomorBc',
        'tanggalBc',
        'nomorPosBc',
        'namaPengangkut',
        'nomorPengangkut',
        'kodeCaraAngkut',
        'tanggalTiba',
        'kodeTps',
        'kodePelTransit',
        'kodePelMuat',
        'kodePelTujuan',
        'nomorAju',
    ];

    // Menentukan kolom-kolom yang bertipe enum
    protected $casts = [
        'kodeTutupPu'    => 'string',
        'kodeCaraAngkut' => 'string',
        'kodeTps'        => 'string',
    ];

    // Relasi dengan tabel 'pelabuhan' melalui 'kodePelTransit'
    public function pelabuhanTransit()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelTransit', 'kodePelabuhan');
        }

    // Relasi dengan tabel 'pelabuhan' melalui 'kodePelMuat'
    public function pelabuhanMuat()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelMuat', 'kodePelabuhan');
        }

    // Relasi dengan tabel 'pelabuhan' melalui 'kodePelTujuan'
    public function pelabuhanTujuan()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelTujuan', 'kodePelabuhan');
        }

    // Relasi dengan tabel 'dokumen_impor' melalui 'nomorAju'
    public function dokumenImpor()
        {
        return $this->belongsTo(DokumenImpor::class, 'nomorAju', 'nomorAju');
        }
    }
