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
            $table->bigInteger('id_kelurahan')->unsigned();
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->bigInteger('id_provinsi')->unsigned();
            $table->foreign('id_kelurahan')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('id_kecamatan')->references('id')->on('regencies')->onDelete('cascade');
            $table->foreign('id_provinsi')->references('id')->on('provinces')->onDelete('cascade');
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
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
