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
     public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
    public function getUsernameAttribute()
   {
    # code...
    return $this->Pengguna->username;
   }
}
