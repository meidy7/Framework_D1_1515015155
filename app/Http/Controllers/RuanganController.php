<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    //
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$Ruangan = new Ruangan();
    	$Ruangan->title = '411b';
    	$Ruangan->save();
    	return "data dengan title {$Ruangan->title} telah disimpan";
    }
}
