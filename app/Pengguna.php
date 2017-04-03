<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    public function Dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    public function Mahasiswa()
    {
    	return $this->hasOne(mahasiswa::class);
    }
    public function Peran()
    {
    	return $this->belongToMany(mahasiswa::class);
    }
}
