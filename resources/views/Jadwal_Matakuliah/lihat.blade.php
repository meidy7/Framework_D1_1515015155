@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('Jadwal_Matakuliah')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Matakuliah</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $jadwal_matakuliah->mahasiswa->nama }}</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>{{ $jadwal_matakuliah->mahasiswa->nim }}</td>
			</tr>
			<tr>
				<td>Matakuliah</td>
				<td>:</td>
				<td>{{ $jadwal_matakuliah->dosen_matakuliah->matakuliah->title }}</td>
			</tr>
			<tr>
				<td>Dosen</td>
				<td>:</td>
				<td>{{ $jadwal_matakuliah->dosen_matakuliah->dosen->nama }}</td>
			</tr>
			<tr>
				<td>Ruangan</td>
				<td>:</td>
				<td>{{ $jadwal_matakuliah->ruangan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $jadwal_matakuliah->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diupdate tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $jadwal_matakuliah->updated_at }}</td>
			</tr>
	</table>
</div>
@stop