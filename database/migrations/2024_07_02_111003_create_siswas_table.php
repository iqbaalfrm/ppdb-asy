<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama_panggilan');
            $table->string('nama_peserta_didik');
            $table->string('no_hp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('jurusan');
            $table->string('alamat_tinggal');
            $table->string('provinsi_tinggal');
            $table->string('kab_kota_tinggal');
            $table->string('kecamatan_tinggal');
            $table->string('kelurahan_tinggal');
            $table->string('kode_pos');
            $table->string('jarak_ke_sekolah');
            $table->string('riwayat_penyakit')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
