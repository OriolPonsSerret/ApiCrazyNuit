@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
<h2>Lista de Rutas Medianas</h2>
@stop

@section('content')  

@foreach ($Rute as $rutesmitjanas)
	<div class="Rute">
		<a href="{{ url('RutesMitjanas/' .$rutesmitjanas->idrutes) }}">
			<strong>{{ $rutesmitjanas->rutnom }}</strong>
		</a>
	</div>
@endforeach                     

    
@stop
@section('footer')

@stop