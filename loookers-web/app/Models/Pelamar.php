<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';

    protected $primaryKey = 'id_pelamar';

    public $timestamps = false;

    protected $fillable = [
        'email',
        'bidang_kerja',
        'created_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id_pelamar', 'id_pelamar');
    }

    public function profilKandidat()
    {
        return $this->hasOne(
            ProfilKandidat::class,
            'id_pelamar',
            'id_pelamar'
        );
    }
}
