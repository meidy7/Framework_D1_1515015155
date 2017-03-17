<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    //
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$Jadwal_Matakuliah = new Jadwal_Matakuliah();
    	$Jadwal_Matakuliah->mahasiswa_id = '1';
    	$Jadwal_Matakuliah->ruangan_id = '1';
    	$Jadwal_Matakuliah->dosen_matakuliah_id = '1';
    	$Jadwal_Matakuliah->save();
    	return "data dengan mahasiswa_id {$Jadwal_Matakuliah->mahasiswa_id} telah disimpan";}
}
