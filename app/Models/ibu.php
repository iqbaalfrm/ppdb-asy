<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $fillable = [
        'nama_ibu', 'status_ibu', 'tgl_lahir_ibu', 'telepon_ibu',
        'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'alamat_ibu',
    ];
}
