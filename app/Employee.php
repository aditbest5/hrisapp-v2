<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['id_jobtitle', 'kode', 'nik', 'kk', 'nama', 'keterangan', 'tanggal_masuk', 'tgl_lahir', 'alamat', 'id_kelurahan', 'id_kecamatan', 'id_provinsi', 'kode_pos', 'gaji', 'pendidikan', 'status_nikah', 'hp', 'kontak_darurat', 'tgl_kontrak', 'tgl_keluar', 'alasan_keluar', 'status_karyawan', 'akun_bank', 'nama_akun', 'id_user'];

    public function district()
    {
        return $this->belongsTo('App\District', 'id_kelurahan');
    }

    public function province()
    {
        return $this->belongsTo('App\Province', 'id_provinsi');
    }

    public function regency()
    {
        return $this->belongsTo('App\Regency', 'id_kecamatan');
    }

    public function jobtitle()
    {
        return $this->belongsTo('App\JobTitle', 'id_jobtitle');
    }
}
