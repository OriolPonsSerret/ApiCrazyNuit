@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
<h2>Lista de Rutas Largas</h2>
@stop

@section('content')  

@foreach ($RuteLL as $rutesllargas)
	<div class="RuteLL">
		<a href="{{ url('rutasllargas/' .$rutesllargas->idrutesl) }}">
			<strong>{{ $rutesllargas->rutnom }}</strong>
		</a>
	</div>
@endforeach                     

    
@stop
@section('footer')

@stop