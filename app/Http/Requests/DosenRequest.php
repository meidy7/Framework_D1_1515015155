<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;
/**
 * 
 */
 class DosenRequest extends Request
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
 		'nama'=>'required',
 		'nip'=>'required|integer',
 		'alamat'=>'required',
 		'username'=>'required'];
 		if($this->is('mahasiswa/tambah')){
 			$validasi['password']='required';
 		}
 		return $validasi;
 	}
 } ?>