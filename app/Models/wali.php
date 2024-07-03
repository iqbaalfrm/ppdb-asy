<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $fillable = [
        'nama_wali', 'status_wali', 'tgl_lahir_wali', 'telepon_wali',
        'pendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali', 'alamat_wali',
    ];
}
