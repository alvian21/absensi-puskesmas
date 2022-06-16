<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Authenticatable
{
    public function divisi()
    {
        return $this->belongsTo('App\Divisi');
    }
}
