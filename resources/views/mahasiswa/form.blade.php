<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="nim">nim</label>
		<div class="col-sm-10">
			{!! Form::text('nim',null,['class'=>'form-control','id'=>'nim','placeholder'=>"nim"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="alamat">alamat</label>
		<div class="col-sm-10">
			{!! Form::text('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"alamat"]) !!}
		</div>
	</div>
	<div class="form-group">
	<label class="col-sm-2 control-label">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
	</div>
</div>
