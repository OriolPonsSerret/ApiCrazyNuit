@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
<h2>Lista de Rutas Medianas</h2>
@stop

@section('content')  

@foreach ($RuteM as $rutesmitjanas)
	<div class="RuteM">
		<a href="{{ url('rutesmitjanas/' .$rutesmitjanas->idrutesm) }}">
			<strong>{{ $rutesmitjanas->rutnom }}</strong>
		</a>
	</div>
@endforeach                     

    
@stop
@section('footer')

@stop