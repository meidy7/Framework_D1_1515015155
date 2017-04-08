<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
   protected $table = 'mahasiswa'; 
	 protected $guarded = ['id'];

   public function Pengguna()
   {
   	return $this->belongsTo(pengguna::class);
   }

   public function getUsernameAttribute()
   {
   	return $this->pengguna->username;
   }
   public function jadwal_matakliah()
   {
    return $this->hasMany(jadwal_matakliah::class);
   }
   public function listMahasiswaDanNim()
    {
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}
