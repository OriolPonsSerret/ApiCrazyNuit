@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
@stop

@section('content')  

@foreach ($Rute as $rutas)
	<div class="Rute">
		<a href="{{ url('Rute/' .$rutas->idrutes) }}">
			<strong>{{ $rutas->Nom }}</strong>
		</a>
	</div>
@endforeach                     

    
@stop
@section('footer')

@stop