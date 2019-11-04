@extends('layouts.app') 
@section('content')    
	<h1>Portofolio</h1>        	
	@if(count($portofolio)>0) 
	<div>            
		@foreach ($portofolio as $p)                
		<div class="well">                
			<h3><a href="portofolio/{{$p->id}}">
			{{$p->title}}</a></h3>                    
			<small>Tanggal: 
			{{$p->created_at}}</small>                
		</div>               
		@endforeach
		{{ $portofolio->links() }}  
		</div>       
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection