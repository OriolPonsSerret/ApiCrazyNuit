@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
	<h2>Editar Discoteca</h2>
@stop
@section('content')
	{!! Form::open(['url'=>'/Discotecas/'.$discotecas->idDiscoteca, 'method'=>'put'])!!}
	<div class="from-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="from-controls">
            {!! Form::text('Nom', $discotecas->Nom, ['class'=>'form-control'])!!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('Descripcio', $discotecas->Descripcio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracio', 'Valoración') !!}
        <div class="form-controls">
            {!! Form::text('Valoracio', $discotecas->Valoracio, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhorariobertura', 'Horario de Apertura') !!}
        <div class="form-controls">
            {!! Form::text('HorariObertura', $discotecas->HoraObertura, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblhoraritancament', 'Horario de Cierre') !!}
        <div class="form-controls">
            {!! Form::text('HorariTancament', $discotecas->HorariTancament, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblpreuentrada', 'Precio Entrada') !!}
        <div class="form-controls">
            {!! Form::text('PreuEntrada', $discotecas->PreuEntrada, ['class' => 'form-control']) !!}
        </div>
    </div>
	{!! Form::submit('Guardar', ['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
@stop
@section('footer')
@stop