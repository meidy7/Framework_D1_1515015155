<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    //
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$Matakuliah = new Matakuliah();
    	$Matakuliah->title = 'Framework';
    	$Matakuliah->keterangan = 'wajib';
    	$Matakuliah->save();
    	return "data dengan title {$Matakuliah->title} telah disimpan";
    }
}
