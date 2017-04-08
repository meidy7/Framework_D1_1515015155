<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    //
    protected $table = 'Dosen_Matakuliah';
     protected $fillable = ['dosen_id','matakuliah_id'];
    public function dosen()
    {
    	# code...
    	return $this->belongsTo(dosen::class);
    }

    public function matakuliah()
    {
    	# code...
    	return $this->belongsTo(matakuliah::class);
    }

    public function jadwal_matakuliah()
    {
    	# code...
    	return $this->hasMany(jadwal_matakuliah::class);
    }
    public function listDosenDanMatakuliah()
    {
       $out = [];
      foreach ($this->all() as $dsnMtk) {
         $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (matakuliah{$dsnMtk->matakuliah->title})";
      }
      return $out;
    }

}
