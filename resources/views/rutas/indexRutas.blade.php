@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
<h2>Lista de Rutas Cortas</h2>
@stop

@section('content')  

@foreach ($Rute as $rutes)
	<div class="Rute">
		<a href="{{ url('Rutes/' .$rutes->idrutes) }}">
			<strong>{{ $rutes->rutnom }}</strong>
		</a>
	</div>
@endforeach                     

    
@stop
@section('footer')

@stop