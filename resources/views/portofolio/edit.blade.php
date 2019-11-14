@extends('layouts.app')

@section('content')

<h1 class="display-4">Edit Blog Post</h1>
{!! Form::open(['action' => ['PortofoliosController@update', $portofolio->id], 'method' => 'POST']) !!}
<div class="form-group">
	{{Form::label('title', 'Title')}}
	{{Form::text('title', $portofolio->title, 
	['class' => 'form-control', 
	'placeholder' => 'Title'])}}
</div> 

<div class="form-group">
	{{Form::label('desc', 'Description')}}
	<br>
	{{Form::textarea('desc', $portofolio->desc, 
	['class' => 'ckeditor', 
	'placeholder' => 'Description'])}}
<br>
{{Form::hidden('_method','PUT')}}

{{Form::submit('Simpan', ['class'=>'btn btn-primary'])}}
</div> 
{!! Form::close() !!}
@endsection