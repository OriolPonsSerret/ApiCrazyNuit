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
        </style>       
    </head>
    <body>
        <div class="container">
                <div class="page-header">

                    @yield('header')
                </div>

                @yield('content')
                
                <footer class="footer">
                    @yield ('footer')
                    <p>CrazyNuit &copy; 2018.</p>
                </footer>
        </div>

    </body>
</html>
