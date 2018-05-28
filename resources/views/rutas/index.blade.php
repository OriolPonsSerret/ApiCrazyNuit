@extends('master')
@section('titlePage')
Nou
@stop
@section('header')
@stop

@section('content')  

<div class="navbar navbar-inverse" style="background-color:rgb(255, 255, 255);border-color:#777";>
    <ul class="nav navbar-nav">
        <li><a href="/ApiCrazyNuit/public/locals/add" class="menu">Crear rutas cortas</a></li>
        <li><a href="/ApiCrazyNuit/public/rutas" class="menu">Crear rutas medianas</a></li>
        <li><a href="/ApiCrazyNuit/public/rutas" class="menu">Crear rutas largas</a></li>
    </ul>  
</div>  

<div class="navbar navbar-inverse" style="background-color:rgb(255, 255, 255);border-color:#777";>
    <ul class="nav navbar-nav">
        <li><a href="/ApiCrazyNuit/public/locals/add" class="menu">Ver rutas cortas</a></li>
        <li><a href="/ApiCrazyNuit/public/rutas" class="menu">Ver rutas medianas</a></li>
        <li><a href="/ApiCrazyNuit/public/rutas" class="menu">Ver rutas largas</a></li>
    </ul>  
</div>                      

    
@stop
@section('footer')

@stop