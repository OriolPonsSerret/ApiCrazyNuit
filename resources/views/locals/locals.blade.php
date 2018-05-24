@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Creación de un nuevo Local</h2>
@stop
@section('content')
    {!! Form::open(['url' => '/llibres']) !!}
    <h3>Formulari</h3>
    <div class ="form-group">
        {!! Form::label('lbltitol', 'Titol') !!}
        <div class="form-controls">
            {!! Form::text('titol', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('publicacio', 'Data de Publicacio') !!}
        <div class="form-controls">
            {!! Form::date('publicacio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
        <div class="form-group">
            {!! Form::label('id', 'Tematica') !!}
        <div class="form-controls">
            {!! Form::select('tematica', $temes, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@stop
@section('footer')

@stop