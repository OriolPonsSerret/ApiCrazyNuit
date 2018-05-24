@extends('master')
@section('titlePage')
index
@stop
@section('header')
	<h2>Registre de Llibres</h2>
	<a href="{{url('/')}}">Inici</a>
	<br/>
	<a href="{{url('/locals')}}">Menu Locals</a>
	<br/
@stop
@section('content')

	<h3>Informacio del local</h3>
	<p>Data de publicacio: {{$BarRestaurant->Nom}}</p>
	<p>Tematica: {{$BarRestaurant->Descripcio}}</p>

@stop
@section('footer')
<h3>App development</h3>
@stop