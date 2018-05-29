@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Bar</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/Pub/'.$bars->idPub,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Bar', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop