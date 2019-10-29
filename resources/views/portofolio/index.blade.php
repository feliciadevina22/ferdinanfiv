@extends('layouts.app') 
@section('content')    
	<h1>Portofolio</h1>        	
	@if(count($portofolio)>0)             
		@foreach ($portofolio as $portofolio)                
		<div class="well">                
			<h3><a href="/Portofolio/{{$portofolio->id}}">
			{{$portofolio->title}}</a></h3>                    
			<small>Tanggal: 
			{{$portofolio->created_at}}</small>                
		</div>               
		@endforeach         
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection