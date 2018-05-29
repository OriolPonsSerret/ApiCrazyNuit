@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Restaurante</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/BarRestaurant/'.$barrestaurant->idBarRestaurant,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Restaurante', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop