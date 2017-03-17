<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('pengguna','PenggunaController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('Ruangan/tambah','RuanganController@tambah');

Route::get('Matakuliah/tambah','MatakuliahController@tambah');

Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('Jadwal_Matakuliah/tambah','Jadwal_MatakuliahController@tambah');


Route::get('/', function () {
    return view('welcome');

});




//
