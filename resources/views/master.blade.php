<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>        
        <title>Crazynuit</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">        
       

        <style>

        .linea{
            display: inline-block;
        }

        .image{
            height: 80px;
        }

        .page-header{
            margin-top:95px;
        }

        .menu{

        font-family: Open Sans, sans-serif;
        font-size: 16px; 
        font-weight: 700; 
        padding-top: 30px!important;
        }

        .menu:hover{
            color:#000 !important;
        }

        </style>       
    </head>
    <body>
        <div class="container">
                <div class="page-header">

                    @yield('header')

        <div class="navbar navbar-inverse navbar-fixed-top" style="background-color:rgb(255, 255, 255);border-color:#777";>
            <div class="container">
                <div class="navbar-header">
                   <a href="http://localhost/ApiCrazyNuit/public/"> <img height="80" height="100" src="https://crazynuit.azurewebsites.net/wp-content/uploads/2018/04/LogoCrazyNuit_burned.png" class="header_logo header-logo" alt="Crazynuit"></a>                   
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/ApiCrazyNuit/public/locals"  class="menu">Ir a Locales</a></li>
                        <li><a href="/ApiCrazyNuit/public/rutas" class="menu">Ir a Rutas</a></li>
                    </ul>
                </div>
            </div>
        </div>

                </div>

                @yield('content')
                
                <footer class="footer">
                    @yield ('footer')
                    <p>CrazyNuit &copy; 2018.</p>
                </footer>
        </div>

    </body>
</html>
