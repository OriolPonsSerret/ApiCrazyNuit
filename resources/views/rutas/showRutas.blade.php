@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>		
		<a href="{{url('/llibres/'.$rutes->id.'/edit')}}">Modificar la ruta</a>
		<a href="{{url('/llibres/'.$rutes->id.'/delete')}}">Eliminar la ruta</a>		
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p><strong>Nombre</strong>: {{$rutes->rutnom}}</p>
	<p><strong>Descripción</strong>: {{$rutes->rutdescripcio}}</p>
	<p><strong>Creador</strong>: {{$rutes->rutcreador}}</p>
	<p><strong>Mida</strong>: {{$rutes->rutmida}}</p></p>
	<p><strong>Horario de Cierre</strong>: </p>
	<p><strong>Tipo Gastronomico</strong>: {{$rutes->TipusGastronomic}}</p>
	<p><strong>Categoria</strong>: {{$rutes->Categoria}}</p>

@stop
@section('footer')
@stop