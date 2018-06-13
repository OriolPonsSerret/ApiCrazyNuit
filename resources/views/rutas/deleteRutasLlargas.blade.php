@extends ('master')
@section('titlePage')
index
@stop
@section('header')
<h2>Eliminar Ruta Larga</h2>
@stop
@section('content')
{!! Form::open(['url'=>'/RutaLlarga/'.$rutesllargas->idrutesl,'method'=>'delete'])!!}
	{!! Form::submit('Eliminar Ruta', ['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}
@stop
@section('footer')
@stop