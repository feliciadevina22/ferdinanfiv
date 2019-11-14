@extends('layouts.app')

@section('content')
@if($portofolio)
<h1>{{$portofolio->title}}</h1>
<small>Tanggal : {{$portofolio->created_at}}</small>
<p>{!!$portofolio->desc!!}</p>

{!! Form::open(['action' => ['PortofoliosController@destroy', 
		          $portofolio->id],'method' => 'POST', 
		          'class' => 'float-right']) !!}
	{{Form::hidden('_method', 'DELETE')}}
	{{Form::submit("Delete", ['class'=>'btn btn-danger'])}} 
{!! Form::close() !!}
@else
<h1>No data.</h1>
@endif
@endsection