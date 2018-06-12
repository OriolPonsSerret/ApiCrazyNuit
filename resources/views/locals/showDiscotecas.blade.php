@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>
		<a href="{{url('/Disco/'.$discotecas->idDiscoteca.'/edit')}}">Modificar la Discoteca</a>	
		<a href="{{url('/Disco/'.$discotecas->idDiscoteca.'/delete')}}">Eliminar la Discoteca</a>
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p><strong>Nombre</strong>: {{$discotecas->Nom}}</p>
	<p><strong>Descripción</strong>: {{$discotecas->Descripcio}}</p>
	<p><strong>Valoración</strong>: {{$discotecas->Valoracio}}</p>
	<p><strong>Horario de Apertura</strong>: </p>
	<p><strong>Horario de Cierre</strong>: </p>
	<p><strong>Precio Entrada</strong>: {{$discotecas->PreuEntrada}}</p>

@stop
@section('footer')
@stop