<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilKandidat extends Model
{
    protected $table = 'profil_kandidat';

    protected $primaryKey = 'id_profil';

    public $timestamps = false;

    protected $fillable = [
        'id_pelamar',
        'photo_kandidat',
        'nama_lengkap',
        'nomor_telepon',
        'url_github',
        'username_github',
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
