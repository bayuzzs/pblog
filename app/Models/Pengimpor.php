<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Notifications\Notifiable;

class Pengimpor extends Authenticatable
    {
    use HasFactory;
    protected $table = 'pengimpor';
    protected $guard = 'pengimpor';
    protected $primaryKey = 'npwp';

    protected $fillable = [
        'npwp',
        'namaPerusahaan',
        'alamatPerusahaan',
        'teleponPerusahaan',
        'username',
        'password',
        'nama',
        'email',
        'telepon',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    }
