<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_employee');
            $table->string('kode');
            $table->date('tanggal_mulai');
            $table->integer('id_leave');
            $table->string('pekerjaan');
            $table->string('tujuan');
            $table->datetime('waktu_keluar');
            $table->date('tanggal_akhir');
            $table->string('keterangan');
            $table->string('status');
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
        Schema::dropIfExists('employee_leaves');
    }
}
