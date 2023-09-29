<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = ['kode', 'nama', 'keterangan', 'status', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function division()
    {
        return $this->hasMany('App\Division', 'id_department');
    }
}
