<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $table = 'tb_riwayat_pelatihans';
    protected $fillable = [
        'pelatihan','sertifikat','tahun','id_pelamar'
    ];
}
