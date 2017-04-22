<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;
/**
 * 
 */
 class Dosen_MatakuliahRequest extends Request
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
 		'Dosen'=>'required',
 		'Matakuliah'=>'required'
 		];
 		return $validasi;
 	}
 } ?>