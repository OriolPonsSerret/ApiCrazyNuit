@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Ruta</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/RutaMitjana/'.$rutesmitjanas->idrutes,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Ruta mi', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop