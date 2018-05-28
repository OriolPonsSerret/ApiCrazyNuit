@extends('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Lista de Bares</h2>

@stop
@section('content')

@foreach ($Pub as $bars)
	<div class="Pub">
		<a href="{{ url('Pub/' .$bars->idPub) }}">
			<strong>{{ $bars->Nom }}</strong>
		</a>
	</div>
@endforeach

@stop
@section('footer')
@stop