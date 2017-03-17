<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = 'M Meidy F';
    	$dosen->nip = '1234567890';
    	$dosen->alamat = 'Jl.Kahoi 2B';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
