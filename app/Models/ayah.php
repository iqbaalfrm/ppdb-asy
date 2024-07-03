<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $fillable = [
        'nama_ayah', 'status_ayah', 'tgl_lahir_ayah', 'telepon_ayah',
        'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'alamat_ayah',
    ];
}
