<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
{


        public function awal()
    {
       
        return view('Dosen_Matakuliah.awal', ['data'=>Dosen_Matakuliah::all()]);
    }
    public function tambah(){
        return view('jadwal_matakuliah.tambah');
    }
    public function simpan(Request $input){
        $Dosen_Matakuliah = new Dosen_Matakuliah();
        
        $Dosen_Matakuliah->dosen_id = $input->ruangan_id;
        $Dosen_Matakuliah->matakuliah_id = $input->dosen_matakuliah_id;
        $informasi = $Dosen_Matakuliah->save()?'Berhasil simpan data': 'Gagal simpan data';
    return redirect('Dosen_Matakuliah')->with(['informasi'=>$informasi]);
}
    public function edit($id){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
    
        return view('Dosen_Matakuliah.edit')->with(array('Dosen_Matakuliah' =>$Dosen_Matakuliah ));
    }
    public function lihat($id){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
        return view('Dosen_Matakuliah.lihat')->with(array('Dosen_Matakuliah' =>$Dosen_Matakuliah ));
    }

    public function update($id, Request $input){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
        
        $Dosen_Matakuliah->ruangan_id = $input->ruangan_id;
        $Dosen_Matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $informasi = $Dosen_Matakuliah->save()?'Berhasil update data': 'Gagal update data';
    return redirect('Dosen_Matakuliah')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
        $informasi = $Dosen_Matakuliah->delete()?'Berhasil hapus data': 'Gagal hapus data';
    return redirect('Dosen_Matakuliah')->with(['informasi'=>$informasi]);
    }
}
