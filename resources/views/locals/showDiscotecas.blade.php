@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>
		<a href="{{url('/llibres/'.$discotecas->id.'/edit')}}">Modificar la Discoteca</a>	
		<a href="{{url('/llibres/'.$discotecas->id.'/delete')}}">Eliminar la Discoteca</a>
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p><strong>Nombre</strong>: {{$discotecas->Nom}}</p>
	<p><strong>Descripción</strong>: {{$discotecas->Descripcio}}</p>
	<p><strong>Valoración</strong>: {{$discotecas->Valoracio}}</p>
	<p><strong>Horario de Apertura</strong>: </p>
	<p><strong>Horario de Cierre</strong>: </p>
	<p><strong>Tipo Gastronomico</strong>: {{$discotecas->TipusGastronomic}}</p>
	<p><strong>Categoria</strong>: {{$discotecas->Categoria}}</p>
	<p><strong>Precio Entrada</strong>: {{$discotecas->PreuEntrada}}</p>

@stop
@section('footer')
@stop