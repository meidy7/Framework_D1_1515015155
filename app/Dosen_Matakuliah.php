<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    //
    protected $table = 'Dosen_Matakuliah';
    public function dosen()
    {
    	# code...
    	return $this->belongsToMany(dosen::class);
    }

    public function matakuliah()
    {
    	# code...
    	return $this->belongsToMany(matakuliah::class);
    }

    public function jadwal_matakuliah()
    {
    	# code...
    	return $this->hasMany(jadwal_matakuliah::class);
    }

}
