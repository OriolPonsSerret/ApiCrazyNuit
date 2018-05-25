@extends('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Lista de Restaurantes</h2>

@stop
@section('content')

@foreach ($BarRestaurant as $barrestaurant)
	<div class="BarRestaurant">
		<a href="{{ url('BarRestaurant/' .$barrestaurant->id) }}">
			<strong>{{ $barrestaurant->Nom }}</strong>
		</a>
	</div>
@endforeach

@stop
@section('footer')
@stop