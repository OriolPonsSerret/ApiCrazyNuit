@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
@stop

@section('content')  

<div class="navbar navbar-inverse" style="background-color:rgb(255, 255, 255);border-color:#777";>
    <ul class="nav navbar-nav">
        <li><a href="http://localhost/ApiCrazyNuit/public/locals/crearrestaurant" class="menu">Crear Restaurante</a></li>
        <li><a href="http://localhost/ApiCrazyNuit/public/locals/crearbar" class="menu">Crear Pub</a></li>
        <li><a href="http://localhost/ApiCrazyNuit/public/locals/creardiscoteca" class="menu">Crear Discoteca</a></li>
        <li><a href="http://localhost/ApiCrazyNuit/public/rutas/crearruta" class="menu">Crear rutas Cortas</a></li>
        <li><a href="http://localhost/ApiCrazyNuit/public/rutas/crearrutamitjana" class="menu">Crear rutas Medianas</a></li>
        <li><a href="http://localhost/ApiCrazyNuit/public/rutas/crearrutallarga" class="menu">Crear rutas Largas</a></li>
    </ul>  
</div>   

@stop
@section('footer')

@stop