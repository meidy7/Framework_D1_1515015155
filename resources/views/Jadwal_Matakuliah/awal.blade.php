@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data jadwal_matakuliah </strong>
		<a href="{{url('Jadwal_Matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> jadwal_matakuliah </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Mahasiswa </th>
				<th> NIM Mahasiswa </th>
				<th> Nama Matakuliah </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJadwalMatakuliah as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->mahasiswa->nama or 'Nama kosong' }}</td>
					<td>{{ $jadwal->mahasiswa->nim or 'NIM kosong' }}</td>
					<td>{{ $jadwal->dosen_matakuliah->matakuliah->title or 'matakuliah kososng' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('Jadwal_Matakuliah/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('Jadwal_Matakuliah/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Jadwal_Matakuliah/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop