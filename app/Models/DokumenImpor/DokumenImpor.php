<?php

namespace App\Models\DokumenImpor;

use App\Models\DataMaster\Kantor;
use App\Models\DataMaster\Pelabuhan;
use App\Models\Pengimpor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenImpor extends Model
    {
    use HasFactory;

    protected $primaryKey = 'nomorAju';
    public $incrementing = false;
    protected $keyType = 'char';

    protected $table = 'dokumen_impor';

    protected $fillable = [
        'nomorAju',
        'asalBarang',
        'tujuanBarang',
        'jenisDokumen',
        'jenisPemberitahuan',
        'jenisPib',
        'jenisImpor',
        'caraBayar',
        'kodeKantor',
        'kodePelabuhan',
        'isBerwujud',
        'npwp',
    ];

    // Menentukan kolom-kolom yang bertipe enum
    protected $casts = [
        'jenisPib'   => 'string',
        'jenisImpor' => 'string',
        'caraBayar'  => 'string',
    ];

    // Relasi dengan tabel 'kantor'
    public function kantor()
        {
        return $this->belongsTo(Kantor::class, 'kodeKantor', 'kodeKantor');
        }

    // Relasi dengan tabel 'pelabuhan'
    public function pelabuhan()
        {
        return $this->belongsTo(Pelabuhan::class, 'kodePelabuhan', 'kodePelabuhan');
        }

    // Relasi dengan tabel 'pengimpor'
    public function pengimpor()
        {
        return $this->belongsTo(Pengimpor::class, 'npwp', 'npwp');
        }
    }