@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>
		<a href="{{url('/llibres/'.$barrestaurant->id.'/edit')}}">Modificar el Restaurante</a>	
		<a href="{{url('/llibres/'.$barrestaurant->id.'/delete')}}">Eliminar el Restaurante</a>
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p>Nombre: {{$barrestaurant->Nom}}</p>
	<p>Descripción: {{$barrestaurant->Descripcio}}</p>
	<p>Valoración: {{$barrestaurant->Valoracio}}</p>
	<p>Horario de Apertura: {{$barrestaurant->HorariObertura}}</p>
	<p>Horario de Cierre: {{$barrestaurant->HorariTancament}}</p>
	<p>Tipo Gastronomico: {{$barrestaurant->TipusGastronomic}}</p>
	<p>Categoria: {{$barrestaurant->Categoria}}</p>

@stop
@section('footer')
@stop