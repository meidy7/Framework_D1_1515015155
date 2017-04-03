<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    //
    protected $table = 'Jadwal_Matakuliah';

    public function ruangan()
    {
    	# code...
    	return $this->belongsToMany(ruangan::class);
    }
    public function mahasiswa()
    {
    	# code...
    	return $this->belongsToMany(mahasiswa::class);
    }
    public function dosen_matakuliah()
    {
    	# code...
    	return $this->belongsToMany(dosen_matakuliah::class);
    }
}
