@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Ruta Mitjana</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/RutaMitjana/'.$rutesmitjanas->idrutesm,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Ruta', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop