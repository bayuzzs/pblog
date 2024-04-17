<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKemasan extends Model
{
    use HasFactory;
    
    protected $table = 'jenis_kemasan';
    protected $primaryKey = 'kodeKemasan';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeKemasan',
        'namaKemasan',
    ];
}

