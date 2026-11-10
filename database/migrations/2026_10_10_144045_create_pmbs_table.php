<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('pmbs', function (Blueprint $table) {
        $table->id();
        $table->string('email');
        $table->string('nama_siswa');
        $table->string('tempathlahir_siswa');
        $table->date('tanggallahir_siswa');
        $table->string('nik_siswa');
        $table->string('gender');
        $table->string('status_pendaftaran');
        $table->string('sekolah_asal')->nullable();
        $table->string('nisn')->nullable();
        
        $table->string('nama_ayah')->nullable();
        $table->string('nik_ayah')->nullable();
        $table->string('pekerjaan_ayah')->nullable();
        $table->string('telp_ayah')->nullable();
        
        $table->string('nama_ibu')->nullable();
        $table->string('nik_ibu')->nullable();
        $table->string('pekerjaan_ibu')->nullable();
        $table->string('telp_ibu')->nullable();
        $table->text('alamat')->nullable();
        $table->string('kontak_utama')->nullable();
        
        $table->string('nama_pengirim');
        $table->string('nominal_transfer');
        $table->string('bukti_transfer');
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
        Schema::dropIfExists('pmbs');
    }
}
