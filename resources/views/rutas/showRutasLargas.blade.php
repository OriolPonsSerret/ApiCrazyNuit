@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>		
		<a href="{{url('/RutaLlarga/'.$rutesllargas->idrutesl.'/edit')}}">Modificar la ruta</a>
		<a href="{{url('/RutaLlarga/'.$rutesllargas->idrutesl.'/delete')}}">Eliminar la ruta</a>		
	</div>
@stop
@section('content')

	<h3>Información Rutas Medianas</h3></br>
	<p><strong>Nombre</strong>: {{$rutesllargas->rutnom}}</p>
	<p><strong>Descripción</strong>: {{$rutesllargas->rutdescripcio}}</p>
	<p><strong>Creador</strong>: {{$rutesllargas->rutcreador}}</p>
	<p><strong>Bar Nº 1</strong>: {{$rutesllargas->rutpubs}}</p>
	<p><strong>Bar Nº 2</strong>: {{$rutesllargas->rutpubs}}</p>
	<p><strong>Bar Nº 3</strong>: {{$rutesllargas->rutpubs}}</p>
	<p><strong>Restaurante Nº 1</strong>: {{$rutesllargas->rutbars}}</p>
	<p><strong>Restaurante Nº 2</strong>: {{$rutesllargas->rutbars}}</p>
	<p><strong>Restaurante Nº 3</strong>: {{$rutesllargas->rutbars}}</p>
	<p><strong>Discoteca Nº 1</strong>: {{$rutesllargas->rutdiscos}}</p>	
	<p><strong>Discoteca Nº 2</strong>: {{$rutesllargas->rutdiscos}}</p>		
	<p><strong>Discoteca Nº 3</strong>: {{$rutesllargas->rutdiscos}}</p>
	<p><strong>Valoracion</strong>: {{$rutesllargas->rutvaloracio}}</p>	
	<p><strong>Fecha</strong>: {{$rutesllargas->rutdata}}</p>
@stop
@section('footer')
@stop