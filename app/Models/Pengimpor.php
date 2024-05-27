<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Pengimpor extends Authenticatable implements CanResetPasswordContract
    {
    use Notifiable;
    use HasFactory;
    use CanResetPassword;
    protected $table = 'pengimpor';
    protected $guard = 'pengimpor';
    protected $primaryKey = 'npwp';

    protected $hidden = [
        'password',
        'remember_token',
    ];

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
        'urlProfile',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    public function sendPasswordResetNotification( $token )
        {
        $this->notify(
            new ResetPassword($token)
        );
        }
    }

