<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
{
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$Dosen_Matakuliah = new Dosen_Matakuliah();
    	$Dosen_Matakuliah->dosen_id = '3';
    	$Dosen_Matakuliah->matakuliah_id = '1';
    	$Dosen_Matakuliah->save();
    	return "data dengan dosen_id {$Dosen_Matakuliah->dosen_id} telah disimpan";}
}
