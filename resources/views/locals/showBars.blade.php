@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>		
		<a href="{{url('/Pub/'.$bars->idPub.'/edit')}}">Modificar el Bar</a>
		<a href="{{url('/Pub/'.$bars->idPub.'/delete')}}">Eliminar el Bar</a>		
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p><strong>Nombre</strong>: {{$bars->Nom}}</p>
	<p><strong>Descripción</strong>: {{$bars->Descripcio}}</p>
	<p><strong>Valoración</strong>: {{$bars->Valoracio}}</p>
	<p><strong>Horario de Apertura</strong>: </p>
	<p><strong>Horario de Cierre</strong>: </p>
	<p><strong>Tipo Gastronomico</strong>: {{$bars->TipusGastronomic}}</p>
	<p><strong>Categoria</strong>: {{$bars->Categoria}}</p>

@stop
@section('footer')
@stop