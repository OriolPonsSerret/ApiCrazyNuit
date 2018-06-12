@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Editar Ruta</h2>
@stop
@section('content')
	{!! Form::open(['url'=>'/Ruta/ '.$rutes->idrutes, 'method'=>'put'])!!}
	<div class="from-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="from-controls">
            {!! Form::text('rutnom', $rutes->rutnom, ['class'=>'form-control'])!!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('rutdescripcio', $rutes->rutdescripcio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblcreador', 'Creador') !!}
        <div class="form-controls">
            {!! Form::text('rutcreador', $rutes->rutcreador, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblmida', 'Mida') !!}
        <div class="form-controls">
            {!! Form::text('rutmida', $rutes->rutmida, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Bares') !!}
        <div class="form-controls">
            {!! Form::select('rutpubs', $rutes, $bars->rutpubs, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Restaurantes') !!}
        <div class="form-controls">
            {!! Form::select('rutbars', $rutes, $barrestaurant->rutbars, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Discotecas') !!}
        <div class="form-controls">
            {!! Form::select('rutdiscos', $rutes, $discotecas->rutdiscos, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoracion') !!}
        <div class="form-controls">
            {!! Form::text('rutvaloracio', $rutes->rutvaloracio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblfecha', 'Fecha de creación') !!}
        <div class="form-controls">
            {!! Form::date('rutdata', $rutes->rutdata, null, ['class' => 'form-control']) !!}
        </div>
    </div> 
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
@stop
@section('footer')
@stop