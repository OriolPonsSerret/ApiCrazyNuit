@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crear nuevo Pub</h2>
@stop
@section('content')
    {!! Form::open(['url' => '/pub']) !!}
    <div class ="form-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="form-controls">
            {!! Form::text('Nom', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripcio') !!}
        <div class="form-controls">
            {!! Form::text('Descripcio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoracio') !!}
        <div class="form-controls">
            {!! Form::text('Valoracio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhorariobertura', 'HorariObertura') !!}
        <div class="form-controls">
            {!! Form::text('HorariObertura', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhoraritancament', 'HorariTancament') !!}
        <div class="form-controls">
            {!! Form::text('HorariTancament', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbltipusgastronomic', 'TipusGastronomic') !!}
        <div class="form-controls">
            {!! Form::text('TipusGastronomic', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@stop
@section('footer')
@stop