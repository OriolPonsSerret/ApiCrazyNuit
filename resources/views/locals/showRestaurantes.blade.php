@extends('master')
@section('titlePage')
index
@stop
@section('header')

@stop
@section('content')

	<h3>Información del local</h3>
	<p>Nombre: {{$barrestaurant->Nom}}</p>
	<p>Descripción: {{$barrestaurant->Descripcio}}</p>
	<p>Valoración: {{$barrestaurant->Valoracio}}</p>
	<p>Horario de Apertura: </p>
	<p>Horario de Cierre: </p>
	<p>Tipo Gastronomico: {{$barrestaurant->TipusGastronomic}}</p>
	<p>Categoria: {{$barrestaurant->Categoria}}</p>

@stop
@section('footer')
@stop