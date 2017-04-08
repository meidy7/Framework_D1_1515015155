<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table='matakuliah';
    protected $fillable = ['title' ,'keterangan'];
    public function Dosen_Matakuliah()
    {
    	return $this->hasMany(Dosen_Matakulah::class);
    }
    public function listmatakuliah()
    {
    	$out= [];
    	foreach ($this->all() as $mtk ){
    		$out[$mtk->id] = "{$mtk->title} ({$mtk->keterangan})";
    	}
    	return $out;
    }
}