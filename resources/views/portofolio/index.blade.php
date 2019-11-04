@extends('layouts.app') 
@section('content')    
	<h1>Portofolio</h1>        	
	@if(count($portofolio)>0) 
	<div>
	<ul>            
		@foreach ($portofolio as $p)                
		<div class="well">                
			<li>
				<h3><a href="portofolio/{{$p->id}}">
			{{$p->title}}</a></h3> 
			</li>                   
			<small>Tanggal: 
			{{$p->created_at}}</small>                
		</div>               
		@endforeach
		{{ $portofolio->links() }}  
		</ul>
		</div>       
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection