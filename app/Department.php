<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = ['kode', 'nama', 'keterangan', 'status', 'id_user'];
}