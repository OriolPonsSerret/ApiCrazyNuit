@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Discoteca</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/Disco/'.$discotecas->idDiscoteca,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Discoteca', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop