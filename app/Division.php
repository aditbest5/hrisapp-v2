<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    protected $fillable = ['id_department', 'kode', 'nama', 'keterangan', 'status', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'id_department');
    }
}
