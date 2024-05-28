<?php

namespace App\Models\DataMaster;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
    {
    use HasFactory;
    protected $table = 'negara';
    protected $primaryKey = 'kodeNegara';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeNegara',
        'namaNegara',
    ];
    }
