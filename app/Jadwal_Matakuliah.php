<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    //
    protected $table = 'Jadwal_Matakuliah';
    protected $guarded = ['id'];
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
    public function ruangan()
    {
    	# code...
    	return $this->belongsTo(ruangan::class);
    }
    public function mahasiswa()
    {
    	# code...
    	return $this->belongsTo(mahasiswa::class);
    }
    public function dosen_matakuliah()
    {
    	# code...
    	return $this->belongsTo(dosen_matakuliah::class);
    }
    
}

