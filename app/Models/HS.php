<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HS extends Model
{
    use HasFactory;

    protected $table = 'hs';
    protected $primaryKey = 'kodeHS';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeHS',
        'uraianBarangBahasa',
        'uraianBarangEnglish',
        'isLartas',
    ];
}

