@extends('layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">

<h4>EDIT</h4>
{!! Form::model($vehicles, ['route'=>['home.update', $vehicles->id], 'method'=> 'PATCH'])  !!}
	{!! Form::text('tahun', null) !!}
	{!! Form::text('angkot', null) !!}
	{!! Form::text('bis', null) !!}
    {!! Form::text('truk', null) !!}
    {!! Form::text('spdmtr', null) !!}
	{!! Form::submit('Ubah') !!} 
{!! Form::close() !!}
@endsection
      </div>
    </div></div></div></div>