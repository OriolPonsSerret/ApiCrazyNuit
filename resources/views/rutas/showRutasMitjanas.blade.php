@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>		
		<a href="{{url('/RutaMitjana/'.$rutesmitjanas->idrutes.'/edit')}}">Modificar la ruta</a>
		<a href="{{url('/RutaMitjana/'.$rutesmitjanas->idrutes.'/delete')}}">Eliminar la ruta</a>		
	</div>
@stop
@section('content')

	<h3>Información Rutas Medianas</h3></br>
	<p><strong>Nombre</strong>: {{$rutesmitjanas->rutnom}}</p>
	<p><strong>Descripción</strong>: {{$rutesmitjanas->rutdescripcio}}</p>
	<p><strong>Creador</strong>: {{$rutesmitjanas->rutcreador}}</p>
	<p><strong>Bar Nº 1</strong>: {{$rutesmitjanas->rutpubs}}</p>
	<p><strong>Bar Nº 2</strong>: {{$rutesmitjanas->rutpubs}}</p>
	<p><strong>Restaurante Nº 1</strong>: {{$rutesmitjanas->rutbars}}</p>
	<p><strong>Restaurante Nº 2</strong>: {{$rutesmitjanas->rutbars}}</p>
	<p><strong>Discoteca Nº 1</strong>: {{$rutesmitjanas->rutdiscos}}</p>	
	<p><strong>Discoteca Nº 2</strong>: {{$rutesmitjanas->rutdiscos}}</p>
	<p><strong>Valoracion</strong>: {{$rutesmitjanas->rutvaloracio}}</p>	
	<p><strong>Fecha</strong>: {{$rutesmitjanas->rutdata}}</p>
@stop
@section('footer')
@stop