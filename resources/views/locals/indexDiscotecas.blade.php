@extends('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Lista de Discotecas</h2>

@stop
@section('content')

@foreach ($Disco as $discotecas)
	<div class="Disco">
		<a href="{{ url('Disco/' .$discotecas->idDiscoteca) }}">
			<strong>{{ $discotecas->Nom }}</strong>
		</a>
	</div>
@endforeach

@stop
@section('footer')
@stop