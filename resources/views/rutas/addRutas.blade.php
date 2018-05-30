@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crea nova Ruta</h2>
@stop
@section('content')
    {!! Form::open(['url' => 'rutas/ruta']) !!}
    <div class ="form-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="form-controls">
            {!! Form::text('rutnom', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('rutdescripcio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblcreador', 'Creador') !!}
        <div class="form-controls">
            {!! Form::text('rutcreador', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblmida', 'Mida') !!}
        <div class="form-controls">
            {!! Form::text('rutmida', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Locales') !!}
        <div class="form-controls">
            {!! Form::text('rutlocals', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracion', 'Valoracion') !!}
        <div class="form-controls">
            {!! Form::text('rutvaloracio', null, ['class' => 'form-control']) !!}
        </div>
    </div>   
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
@section('footer')
@stop