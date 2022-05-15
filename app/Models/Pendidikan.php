<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'tb_riwayat_pendidikans';
    protected $fillable = [
        'jenjang','institusi','jurusan','tahun','ipk','id_pelamar'
    ];
}
