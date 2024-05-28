<?php

namespace App\Models\DataMaster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuta extends Model
    {
    use HasFactory;

    protected $table = 'valuta';
    protected $primaryKey = 'kodeValuta';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeValuta',
        'namaValuta',
        'kurs',
    ];
    }

