<?php 
namespace App\Http\Requests;
use App\Http\Requests\Request;
/**
 * 
 */
 class MatakuliahRequest extends Request
 {
 	
 	public function authorize()
 	{
 		# code...
 		return true;
 	}

 	public function rules()
 	{
 		# code...
 		$validasi = ['title'=>'required'];
 		return $validasi;
 	}
 } ?>