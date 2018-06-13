@extends ('master')
@section('titlePage')
Nou
@stop
@section('header')
    <h2>Crear nueva Ruta Larga</h2>
@stop
@section('content')
    {!! Form::open(['url' => 'rutas/rutallarga']) !!}
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
        {!! Form::label('lblpubs', 'Bar Nº 1') !!}
        <div class="form-controls">
            {!! Form::select('rutpub', $bars, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblpubs', 'Bar Nº 2') !!}
        <div class="form-controls">
            {!! Form::select('rutpub2', $bars, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblpubs', 'Bar Nº 3') !!}
        <div class="form-controls">
            {!! Form::select('rutpub3', $bars, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblbarsrestaurant', 'Restaurante Nº 1') !!}
        <div class="form-controls">
            {!! Form::select('rutbar', $barrestaurant, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblbarsrestaurant', 'Restaurante Nº 2') !!}
        <div class="form-controls">
            {!! Form::select('rutbar2', $barrestaurant, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblbarsrestaurant', 'Restaurante Nº 3') !!}
        <div class="form-controls">
            {!! Form::select('rutbar3', $barrestaurant, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldiscos', 'Discoteca Nº 1') !!}
        <div class="form-controls">
            {!! Form::select('rutdisco', $discotecas, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldiscos', 'Discotecas Nº 2') !!}
        <div class="form-controls">
            {!! Form::select('rutdisco2', $discotecas, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbldiscos', 'Discotecas Nº 3') !!}
        <div class="form-controls">
            {!! Form::select('rutdisco3', $discotecas, null, ['required'], ['class' => 'form-control']) !!}
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