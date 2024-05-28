<?php

namespace App\Models\DataMaster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
    {
    use HasFactory;
    protected $table = 'satuan_barang';
    protected $primaryKey = 'kodeSatuanBarang';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeSatuanBarang',
        'namaSatuanBarang',
    ];
    }
