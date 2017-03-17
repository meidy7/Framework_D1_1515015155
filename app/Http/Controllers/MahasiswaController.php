<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$Mahasiswa = new mahasiswa();
    	$Mahasiswa->nama = 'Meidy';
    	$Mahasiswa->nim = '1515015155';
    	$Mahasiswa->alamat = 'Jl.Kahoi 2B';
    	$Mahasiswa->pengguna_id = '1';
    	$Mahasiswa->save();
    	return "data dengan nama {$Mahasiswa->nama} telah disimpan";
    }
}
