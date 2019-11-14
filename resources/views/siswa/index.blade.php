@extends('layouts.app')

@section('content')

	@if(count($siswas)>0)
	<ul>
		@foreach($siswas as $siswa)
		<li>
			{{$siswa->name}}
		</li>
		@endforeach
	</ul>
			{{$siswas->links()}}

	@else
	<h1>Tidak ada data.</h1>
	@endif

@endsection