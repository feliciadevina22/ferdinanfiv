@extends('layouts.app')

@section('content')
@if($portofolio)
<h1>{{$portofolio->title}}</h1>
<small>Tanggal : {{$portofolio->created_at}}</small>
<p>{{$portofolio->desc}}</p>
@else
<h1>No data.</h1>
@endif
@endsection