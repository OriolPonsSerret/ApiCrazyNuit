@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Editar Restaurante</h2>
@stop
@section('content')
	{!! Form::open(['url'=>'/BarRestaurant/'.$barrestaurant->idBarRestaurant, 'method'=>'put'])!!}
	<div class="from-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="from-controls">
            {!! Form::text('Nom', $barrestaurant->Nom, ['class'=>'form-control'])!!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('Descripcio', $barrestaurant->Descripcio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoración') !!}
        <div class="form-controls">
            {!! Form::text('Valoracio', $barrestaurant->Valoracio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhorariobertura', 'Horario de Apertura') !!}
        <div class="form-controls">
            {!! Form::text('HorariObertura', $barrestaurant->HoraObertura, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhoraritancament', 'Horario de Cierre') !!}
        <div class="form-controls">
            {!! Form::text('HorariTancament', $barrestaurant->HorariTancament, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbltipusgastronomic', 'Tipo Gastronomico') !!}
        <div class="form-controls">
            {!! Form::text('TipusGastronomic', $barrestaurant->TipusGastronomic, ['class' => 'form-control']) !!}
        </div>
    </div>
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
@stop
@section('footer')
@stop