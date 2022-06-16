<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    public function pegawai()
    {
        return $this->hasMany('App\Pegawai');
    }
}
