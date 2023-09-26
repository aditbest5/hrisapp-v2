<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_jobtitle');
            $table->string('kode');
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->string('keterangan');
            $table->date('tanggal_masuk');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->integer('id_kelurahan');
            $table->integer('id_kecamatan');
            $table->integer('id_provinsi');
            $table->string('kode_pos');
            $table->integer('gaji');
            $table->string('pendidikan');
            $table->string('status_nikah');
            $table->string('hp');
            $table->string('kontak_darurat');
            $table->date('tgl_kontrak');
            $table->date('tgl_keluar');
            $table->string('alasan_keluar');
            $table->string('status_karyawan');
            $table->string('akun_bank');
            $table->string('nama_akun');
            $table->integer('id_user');
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
        Schema::dropIfExists('employees');
    }
}
