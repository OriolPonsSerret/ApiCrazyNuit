@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<div>
		<a href="{{url('/BarRestaurant/'.$barrestaurant->idBarRestaurant.'/edit')}}">Modificar el Restaurante</a>	
		<a href="{{url('/BarRestaurant/'.$barrestaurant->idBarRestaurant.'/delete')}}">Eliminar el Restaurante</a>
	</div>
@stop
@section('content')

	<h3>Información del local</h3></br>
	<p><strong>Nombre</strong>: {{$barrestaurant->Nom}}</p>
	<p><strong>Descripción</strong>: {{$barrestaurant->Descripcio}}</p>
	<p><strong>Valoración</strong>: {{$barrestaurant->Valoracio}}</p>
	<p><strong>Horario de Apertura</strong>: {{$barrestaurant->HorariObertura}}</p>
	<p><strong>Horario de Cierre</strong>: {{$barrestaurant->HorariTancament}}</p>
	<p><strong>Tipo Gastronomico</strong>: {{$barrestaurant->TipusGastronomic}}</p>

@stop
@section('footer')
@stop