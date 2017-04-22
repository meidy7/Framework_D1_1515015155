<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Jadwal_MatakuliahRequest;
use App\mahasiswa;
use App\Ruangan;
use App\Dosen_Matakuliah;
use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
    protected $guarded = ['id'];
protected $informasi = 
    'Gagal melakukan aksi';
           public function awal()
    {
       
        //return view('jadwal_matakuliah.awal', ['semuaJadwalMatakuliah'=>jadwal_matakuliah::all()]);
        $semuaJadwalMatakuliah = jadwal_matakuliah::all();
        return view('Jadwal_Matakuliah.awal',compact('semuaJadwalMatakuliah'));
    }
    public function tambah(){
        $mahasiswa = new mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('Jadwal_Matakuliah.tambah',compact('ruangan','dosen_matakuliah','mahasiswa'));

    }
    public function simpan(Jadwal_MatakuliahRequest $input){
        $Jadwal_Matakuliah = new Jadwal_Matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($Jadwal_Matakuliah->save()){
            $this->informasi = "jadwal Mahasiswa berhasil disimpan";
        }
        return redirect('Jadwal_Matakuliah')->with(['informasi'=>$this->informasi]);
}
    public function edit($id){
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $mahasiswa = new mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('Jadwal_Matakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }
    public function lihat($id){
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        return view('Jadwal_Matakuliah.lihat')->with(array('jadwal_matakuliah' =>$jadwal_matakuliah ));
    }

    public function update($id, Jadwal_MatakuliahRequest $input){
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
        $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
        $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        $informasi = $jadwal_matakuliah->save()?'Berhasil update data': 'Gagal update data';
    return redirect('Jadwal_Matakuliah')->with(['informasi'=>$informasi]);
    }

    public function hapus($id){
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $informasi = $jadwal_matakuliah->delete()?'Berhasil hapus data': 'Gagal hapus data';
    return redirect('Jadwal_Matakuliah')->with(['informasi'=>$informasi]);
    }
}
