<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahsTable extends Migration
{
    public function up()
    {
        Schema::create('ayahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('status_ayah');
            $table->date('tgl_lahir_ayah');
            $table->string('telepon_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->text('alamat_ayah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ayahs');
    }
}
