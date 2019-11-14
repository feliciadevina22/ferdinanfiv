@extends('layouts.app')

@section('content')

<h1 class="display-4">Blog Post</h1>
{!! Form::open(['action' => 'PortofoliosController@store', 'method' => 'POST']) !!}
<div class="form-group">
	{{Form::label('title', 'Title')}}
	{{Form::text('title', '', 
	['class' => 'form-control', 
	'placeholder' => 'Title'])}}
</div> 

<div class="form-group">
	{{Form::label('desc', 'Description')}}
	{{Form::textarea('desc', '', 
	['class' => 'ckeditor', 
	'placeholder' => 'Description'])}}
<br>
{{Form::submit('Simpan', ['class'=>'btn btn-primary'])}}
</div> 
{!! Form::close() !!}
@endsection