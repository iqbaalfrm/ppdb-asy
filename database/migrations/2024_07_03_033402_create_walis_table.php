<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalisTable extends Migration
{
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wali');
            $table->string('status_wali');
            $table->date('tgl_lahir_wali');
            $table->string('telepon_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->text('alamat_wali')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('walis');
    }
}
