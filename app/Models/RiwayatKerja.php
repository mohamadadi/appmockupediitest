<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatKerja extends Model
{
    protected $table = 'tb_riwayat_pekerjaans';
    protected $fillable = [
        'perusahaan','posisi','gaji','tahun','id_pelamar'
    ];
}
