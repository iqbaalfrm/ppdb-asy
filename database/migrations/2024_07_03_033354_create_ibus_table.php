<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbusTable extends Migration
{
    public function up()
    {
        Schema::create('ibus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->string('status_ibu');
            $table->date('tgl_lahir_ibu');
            $table->string('telepon_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->text('alamat_ibu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ibus');
    }
}
