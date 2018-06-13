@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Editar Ruta</h2>
@stop
@section('content')
	{!! Form::open(['url'=>'/RutesMitjanas/ '.$rutesmitjanas->idrutesm, 'method'=>'put'])!!}
	<div class="from-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="from-controls">
            {!! Form::text('rutnom', $rutesmitjanas->rutnom, ['class'=>'form-control'])!!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('rutdescripcio', $rutesmitjanas, $rutesmitjanas->rutdescripcio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblcreador', 'Creador') !!}
        <div class="form-controls">
            {!! Form::select('rutcreador', $usuari->rutcreador, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Bares') !!}
        <div class="form-controls">
            {!! Form::select('rutpubs', $rutesmitjanas, $bars->rutpubs, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Restaurantes') !!}
        <div class="form-controls">
            {!! Form::select('rutbars', $rutesmitjanas, $barrestaurant->rutbars, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Discotecas') !!}
        <div class="form-controls">
            {!! Form::select('rutdiscos', $rutesmitjanas, $discotecas->rutdiscos, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoracion') !!}
        <div class="form-controls">
            {!! Form::text('rutvaloracio', $rutesmitjanas->rutvaloracio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblfecha', 'Fecha de creación') !!}
        <div class="form-controls">
            {!! Form::date('rutdata', $rutesmitjanas->rutdata, null, ['class' => 'form-control']) !!}
        </div>
    </div> 
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
@stop
@section('footer')
@stop