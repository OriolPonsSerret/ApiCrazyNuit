@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>		
		<a href="{{url('/Ruta/'.$rutes->idrutes.'/edit')}}">Modificar la ruta</a>
		<a href="{{url('/Ruta/'.$rutes->idrutes.'/delete')}}">Eliminar la ruta</a>		
	</div>
@stop
@section('content')

	<h3>Información de la ruta</h3></br>
	<p><strong>Nombre</strong>: {{$rutes->rutnom}}</p>
	<p><strong>Descripción</strong>: {{$rutes->rutdescripcio}}</p>
	<p><strong>Creador</strong>: {{$rutes->rutcreador}}</p>
	<p><strong>Mida</strong>: {{$rutes->rutmida}}</p>
	<p><strong>Locales</strong>: {{$rutes->rutlocals}} </p>
	<p><strong>Valoracion</strong>: {{$rutes->rutvaloracio}}</p>
@stop
@section('footer')
@stop