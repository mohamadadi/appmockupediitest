<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'tb_riwayat_jabatans';
    protected $fillable = [
        'jabatan','created_at','updated_at'
    ];
}
