<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal()
    {
        # code...
        return view('Matakuliah.awal', ['data'=>Matakuliah::all()]);
    }
    public function tambah(){
        return view('Matakuliah.tambah');
    }
    public function simpan(Request $input){
        $Matakuliah = new Matakuliah;
        $Matakuliah->title = $input->title;
        $Matakuliah->keterangan = $input->keterangan;
        $informasi = $Matakuliah->save()?'Berhasil simpan data': 'Gagal simpan data';
    return redirect('Matakuliah')->with(['informasi'=>$informasi]);
}
    public function edit($id){
        $Matakuliah = Matakuliah::find($id);
        return view('Matakuliah.edit')->with(array('Matakuliah' =>$Matakuliah ));
    }
    public function lihat($id){
        $Matakuliah = Matakuliah::find($id);
        return view('Matakuliah.lihat')->with(array('Matakuliah' =>$Matakuliah ));
    }

    public function update($id, Request $input){
        $Matakuliah = Matakuliah::find($id);
        $Matakuliah->title = $input->title;
        $Matakuliah->keterangan = $input->keterangan;
        $informasi = $Matakuliah->save()?'Berhasil update data': 'Gagal update data';
    return redirect('Matakuliah')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $Matakuliah = Matakuliah::find($id);
        $informasi = $Matakuliah->delete()?'Berhasil hapus data': 'Gagal hapus data';
    return redirect('Matakuliah')->with(['informasi'=>$informasi]);
    }
}
