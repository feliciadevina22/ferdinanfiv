@extends('layouts.app')

@section('content')

	@if(isset($siswa))
	<ul>
		
		<li>
			{{$siswa->name}}
		</li>
	</ul>

	@else
	<h1>Tidak ada data.</h1>
	@endif

@endsection