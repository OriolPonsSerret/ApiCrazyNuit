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
            {!! Form::text('rutcreador', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lblmida', 'Mida') !!}
        <div class="form-controls">
            {!! Form::text('rutmida', null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Bares') !!}
        <div class="form-controls">
            {!! Form::select('rutlocals', $bars, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Restaurantes') !!}
        <div class="form-controls">
            {!! Form::select('rutlocals', $barrestaurant, null, ['required'], ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class ="form-group">
        {!! Form::label('lbllocales', 'Discotecas') !!}
        <div class="form-controls">
            {!! Form::select('rutlocals', $discotecas, null, ['required'], ['class' => 'form-control']) !!}
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