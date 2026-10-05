<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Database\Factories\UserFactory;
// use Illuminate\Database\Eloquent\Attributes\Fillable;
// use Illuminate\Database\Eloquent\Attributes\Hidden;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $primaryKey = 'id_user';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'id_admin',
        'id_pelamar',
    ];

    protected $hidden = [
        'password',
    ];

    public function pelamar()
    {
        return $this->belongsTo(
            Pelamar::class,
            'id_pelamar',
            'id_pelamar'
        );
    }
}
