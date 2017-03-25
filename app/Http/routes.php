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
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('Matakuliah','MatakuliahController@awal');
Route::get('Matakuliah/tambah','MatakuliahController@tambah');
Route::get('Matakuliah/{Matakuliah}','MatakuliahController@lihat');
Route::post('Matakuliah/simpan','MatakuliahController@simpan');
Route::get('Matakuliah/edit/{Matakuliah}','MatakuliahController@edit');
Route::post('Matakuliah/edit/{Matakuliah}','MatakuliahController@update');
Route::get('Matakuliah/hapus/{Matakuliah}','MatakuliahController@hapus');

Route::get('Ruangan','RuanganController@awal');
Route::get('Ruangan/tambah','RuanganController@tambah');
Route::get('Ruangan/{Ruangan}','RuanganController@lihat');
Route::post('Ruangan/simpan','RuanganController@simpan');
Route::get('Ruangan/edit/{Ruangan}','RuanganController@edit');
Route::post('Ruangan/edit/{Ruangan}','RuanganController@update');
Route::get('Ruangan/hapus/{Ruangan}','RuanganController@hapus');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

Route::get('Dosen_Matakuliah','Dosen_MatakuliahController@awal');
Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('Dosen_Matakuliah/{Dosen_Matakuliah}','Dosen_MatakuliahController@lihat');
Route::post('Dosen_Matakuliah/simpan','Dosen_MatakuliahController@simpan');
Route::get('Dosen_Matakuliah/edit/{Dosen_Matakuliah}','Dosen_MatakuliahController@edit');
Route::post('Dosen_Matakuliah/edit/{Dosen_Matakuliah}','Dosen_MatakuliahController@update');
Route::get('Dosen_Matakuliah/hapus{Dosen_Matakuliah}','Dosen_MatakuliahController@hapus');

Route::get('Jadwal_Matakuliah','Jadwal_MatakuliahController@awal');
Route::get('Jadwal_Matakuliah/tambah','Jadwal_MatakuliahController@tambah');
Route::get('Jadwal_Matakuliah/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@lihat');
Route::post('Jadwal_Matakuliah/simpan','Jadwal_MatakuliahController@simpan');
Route::get('Jadwal_Matakuliah/edit/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@edit');
Route::post('Jadwal_Matakuliah/edit/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@update');
Route::get('Jadwal_Matakuliah/hapus/{Jadwal_Matakuliah}','Jadwal_MatakuliahController@hapus');


Route::get('/', function () {
    return view('welcome');

});




//
