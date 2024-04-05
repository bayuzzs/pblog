<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
    {
    use HasFactory;
    protected $table = 'petugas';
    protected $guard = 'petugas';
    protected $primaryKey = 'petugasId';

    protected $fillable = [
        'username',
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    }
