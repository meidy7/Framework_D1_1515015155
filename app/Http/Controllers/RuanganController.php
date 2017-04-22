<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuanganRequest;
use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    //
    public function awal()
    {
        # code...
        return view('Ruangan.awal', ['data'=>Ruangan::all()]);
    }
    public function tambah(){
        return view('Ruangan.tambah');
    }
    public function simpan(RuanganRequest $input){
        $Ruangan = new Ruangan;
        $Ruangan->title = $input->title;
        $informasi = $Ruangan->save()?'Berhasil simpan data': 'Gagal simpan data';
    return redirect('Ruangan')->with(['informasi'=>$informasi]);
}
    public function edit($id){
        $Ruangan = Ruangan::find($id);
        return view('Ruangan.edit')->with(array('Ruangan' =>$Ruangan ));
    }
    public function lihat($id){
        $Ruangan = Ruangan::find($id);
        return view('Ruangan.lihat')->with(array('Ruangan' =>$Ruangan ));
    }

    public function update($id, RuanganRequest $input){
        $Ruangan = Ruangan::find($id);
        $Ruangan->title = $input->title;
        $informasi = $Ruangan->save()?'Berhasil update data': 'Gagal update data';
    return redirect('Ruangan')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $Ruangan = Ruangan::find($id);
        $informasi = $Ruangan->delete()?'Berhasil hapus data': 'Gagal hapus data';
    return redirect('Ruangan')->with(['informasi'=>$informasi]);
    }
}
