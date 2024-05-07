<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('tempat_lahir',100);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',10);
            $table->string('asal_sekolah',100);
            $table->string('alamat_rumah');
            $table->string('nama_ayah',50)->nullable();
            $table->string('nama_ibu',50)->nullable();
            $table->string('nama_wali',50)->nullable();
            $table->string('nohp',13);
            $table->string('email');
            $table->string('foto_murid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
};
