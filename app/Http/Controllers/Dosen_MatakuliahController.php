<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;

class Dosen_MatakuliahController extends Controller
{


        protected $informasi = 'Gagal melakukan aksi';

    public function awal()
    {
        $semuaDosen_Matakuliah = Dosen_Matakuliah::all();
        return view('Dosen_Matakuliah.awal', compact('semuaDosen_Matakuliah'));

    }

    public function tambah()
    {      
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('Dosen_Matakuliah.tambah',compact('dosen','matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));
            if($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil disimpan";
            return redirect('Dosen_Matakuliah')->with(['informasi'=>$this->informasi]);

           
    }
    public function lihat($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        return view('Dosen_Matakuliah.lihat',compact('dosen_matakuliah'));
    }
    public function edit($id){
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('Dosen_Matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
        return redirect('Dosen_Matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
   {
         $dosen_matakuliah = dosen_matakuliah::find($id);
      if($dosen_matakuliah->delete()) $this->informasi = "Jadwal Dosen Mengajar berhasil dihapus ";
      return redirect('Dosen_Matakuliah')->with(['informasi' => $this->informasi]);
   }
}
