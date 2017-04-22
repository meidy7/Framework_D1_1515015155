<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;
/**
 * 
 */
 class Jadwal_MatakuliahRequest extends Request
 {
 	
 	public function authorize()
 	{
 		# code...
 		return true;
 	}

 	public function rules()
 	{
 		# code...
 		$validasi = [
 		'Mahasiswa'=>'required',
 		'Matakuliah'=>'required',
 		'Ruangan'=>'required'
 		];
 		return $validasi;
 	}
 } ?>