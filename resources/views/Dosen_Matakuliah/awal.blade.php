@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Dosen_Matakuliah </strong>
		<a href="{{url('Dosen_Matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Dosen_Matakuliah </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> ruangan_id </th>
				<th> dosen_matakuliah_id </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $Dosen_Matakuliah)
				<tr>
					<td>{{ $x++ }}</td>
					
					<td>{{ $Dosen_Matakuliah->ruangan_id or 'ruangan_id kosong' }}</td>
					<td>{{ $Dosen_Matakuliah->dosen_matakuliah_id or 'dosen_matakuliah_id' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('Dosen_Matakuliah/edit/'.$Dosen_Matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('Dosen_Matakuliah/'.$Dosen_Matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Dosen_Matakuliah/hapus/'.$Dosen_Matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop