@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('mahasiswa') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data mahasiswa</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $mahasiswa->nama }}</td>
				</tr>
				<tr>
						<td>NIM</td>
						<td>:</td>
						<td>{{ $mahasiswa->nim }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $mahasiswa->alamat }}</td>
				</tr>
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $mahasiswa->Pengguna->username}}</td>
				</tr>
				<tr>
						<td>password</td>
						<td>:</td>
						<td>{{ $mahasiswa->Pengguna->password}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$mahasiswa->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$mahasiswa->updated_at}}</td>
				</tr>
		</table>
</div>
@stop