@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crear nuevo Restaurante</h2>
@stop
@section('content')
    {!! Form::open(['url' => '/BarRestaurant']) !!}
    <h3>Formulari</h3>
    <div class ="form-group">
        {!! Form::label('lblid', 'ID') !!}
        <div class="form-controls">
            {!! Form::text('idBar-Restaurant', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="form-controls">
            {!! Form::date('Nom', null, ['class' => 'form-control']) !!}
        </div>
    </div>
        <div class="form-group">
            {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::select('Descripcio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    </div>
        <div class="form-group">
            {!! Form::label('lblvaloracio', 'Valoración') !!}
        <div class="form-controls">
            {!! Form::select('Valoracio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    </div>
        <div class="form-group">
            {!! Form::label('lblHorariObert', 'Horario de Abertura') !!}
        <div class="form-controls">
            {!! Form::select('Horari-Obertura', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    </div>
        <div class="form-group">
            {!! Form::label('lblHorariTancat', 'Horario de Cierre') !!}
        <div class="form-controls">
            {!! Form::select('Horari-Tancament', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    </div>
        <div class="form-group">
            {!! Form::label('lblTipusGastronomic', 'Tipo Gastronomico') !!}
        <div class="form-controls">
            {!! Form::select('TipusGastronomic', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    </div>
        <div class="form-group">
            {!! Form::label('lblCategoria', 'Categoria') !!}
        <div class="form-controls">
            {!! Form::select('Categoria', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@stop
@section('footer')
<h3>App development</h3>
@stop