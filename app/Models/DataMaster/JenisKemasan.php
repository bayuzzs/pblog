<?php

namespace App\Models\DataMaster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKemasan extends Model
    {
    use HasFactory;

    protected $table = 'jenis_kemasan';
    protected $primaryKey = 'kodeJenisKemasan';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeJenisKemasan',
        'namaKemasan',
    ];
    }

