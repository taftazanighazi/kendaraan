@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="table-responsive">
						<h4>CREATE</h4>
					 {!! Form::open(['route'=>'home.store'])!!}
						{!! Form::text('tahun', null,['placeholder'=>'Masukkan Tahun'])!!}
						{!! Form::text('angkot',null,['placeholder'=>'Masukkan data angkot'])!!}
						{!! Form::text('bis',null,['placeholder'=>'Masukkan data bis'])!!}
						{!! Form::text('truk',null,['placeholder'=>'Masukkan data truk'])!!}
						{!! Form::text('spdmtr',null,['placeholder'=>'Masukkan data Sepeda Motor'])!!}
					 	{!! Form::submit('simpan')!!}
					 {!!Form::close()!!}
					 @endsection

					</div>
				</div>
			</div>
		</div>
	</div>
