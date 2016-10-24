@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>Tahun</th>
			<th>Angkot</th>
			<th>Bis</th>
			<th>Truk</th>
			<th>Sepeda Motor</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($vehicles as $vehicles)
		<tr>
			<td>{{$vehicles->tahun}}</td>
			<td>{{$vehicles->angkot}}</td>
			<td>{{$vehicles->bis}}</td>
			<td>{{$vehicles->truk}}</td>
			<td>{{$vehicles->spdmtr}}</td>
			<td>
				<form method="POST" action="{{ route('home.destroy', $vehicles->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('home.edit', $vehicles->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<a href="{{ route('home.create') }}" button type="button" class="btn btn-info">Create</a></button>
</div></div></div></div></div>
@endsection
