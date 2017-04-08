<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $guarded = ['id'];
    public function Dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    public function mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }
    public function peran()
    {
        return $this->belongsToMany(peran::class);
    }
}
