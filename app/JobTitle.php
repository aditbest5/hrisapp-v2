<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    //
    protected $fillable = ['id_division', 'kode', 'nama', 'keterangan', 'status', 'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function division()
    {
        return $this->belongsTo('App\Division', 'id_division');
    }
    public function employee()
    {
        return $this->hasMany('App\Employee', 'id_jobtitle');
    }
}
