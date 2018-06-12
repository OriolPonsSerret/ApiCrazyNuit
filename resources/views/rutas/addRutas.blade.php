@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crear nueva Ruta</h2>
@stop
@section('content')
    {!! Form::open(['url' => 'rutas/ruta']) !!}
    <div class ="form-group">
        {!! Form::label('lblnom', 'Nombre') !!}
        <div class="form-controls">
            {!! Form::text('rutnom', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldescripcio', 'Descripción') !!}
        <div class="form-controls">
            {!! Form::text('rutdescripcio', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblcreador', 'Creador') !!}
        <div class="form-controls">
            {!! Form::select('rutcreador', $usuari, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblpubs', 'Bares') !!}
        <div class="form-controls">
            {!! Form::select('rutpubs', $bars, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblbarsrestaurant', 'Restaurantes') !!}
        <div class="form-controls">
            {!! Form::select('rutbars', $barrestaurant, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldiscos', 'Discotecas') !!}
        <div class="form-controls">
            {!! Form::select('rutdiscos', $discotecas, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblvaloracion', 'Valoracion') !!}
        <div class="form-controls">
            {!! Form::text('rutvaloracio', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>   
    <div class ="form-group">
        {!! Form::label('lblfecha', 'Fecha de creación') !!}
        <div class="form-controls">
            {!! Form::date('rutdata', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div> 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop
@section('footer')
@stop

<style>

.container{
    padding-left: 100px;
 }
 input{
    width:100%;
 }
</style>