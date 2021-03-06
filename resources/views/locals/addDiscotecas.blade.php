@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crear nueva Discoteca</h2>
@stop
@section('content')
    {!! Form::open(['url' => 'locales/discotecas']) !!}
    <div class ="form-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="form-controls">
            {!! Form::text('Nom', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('Descripcio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoración') !!}
        <div class="form-controls">
            {!! Form::text('Valoracio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhorariobertura', 'Horario de Apertura') !!}
        <div class="form-controls">
            {!! Form::text('HorariObertura', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhoraritancament', 'Horario de Cierre') !!}
        <div class="form-controls">
            {!! Form::text('HorariTancament', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblpreuentrada', 'Precio Entrada') !!}
        <div class="form-controls">
            {!! Form::text('PreuEntrada', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@stop
@section('footer')
@stop