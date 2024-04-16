<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    use HasFactory;
    protected $table = 'kantor';
    protected $primaryKey = 'kodeKantor';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'kodeKantor',
        'namaKantor',
    ];
}
