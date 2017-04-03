<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    //
    protected $table = 'dosen';
    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }
    public function Dosen_matakuliah()
    {
    	return $this->hasMany(Dosen_matakuliah::class);
    }
}
