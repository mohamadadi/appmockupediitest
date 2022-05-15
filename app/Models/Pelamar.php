<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'tb_pelamars';
    protected $fillable = [
        'jabatan_id',
        'nama',
        'no_ktp',
        'tob',
        'dob',
        'gender',
        'agama',
        'gol_darah',
        'status',
        'alamat_ktp',
        'alamat_domisili',
        'email',
        'no_telp',
        'emergency_contact',
        'keahlian',
        'confirm_available_anywhere',
        'request_salary'
    ];    
}
