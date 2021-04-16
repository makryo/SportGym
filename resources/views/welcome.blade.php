<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn-secondary {
                color: #fff;
                background-color: #555;
                border-color: #555;
            }

            .btn-secondary:hover {
                color: #fff;
                background-color: #424242;
                border-color: #3c3c3c;
            }

            .btn-secondary:focus, .btn-secondary.focus {
                color: #fff;
                background-color: #424242;
                border-color: #3c3c3c;
                box-shadow: 0 0 0 0.2rem rgba(111, 111, 111, 0.5);
            }

            .btn-secondary.disabled, .btn-secondary:disabled {
                color: #fff;
                background-color: #555;
                border-color: #555;
            }

            .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
            .show > .btn-secondary.dropdown-toggle {
                color: #fff;
                background-color: #3c3c3c;
                border-color: #353535;
            }

            .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
            .show > .btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(111, 111, 111, 0.5);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    Deportito Sport Gym
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <div class="container">
                        <br>  
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                            <div class="item active">
                            
                                <img src="https://i.ibb.co/dPzGDT2/recorte1.png" alt="recorte1" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="https://i.ibb.co/3NsNtY7/recorte2.png" alt="recorte2" style="width:100%;">
                            </div>
                            
                            <div class="item">
                                <img src="https://i.ibb.co/C197Tz0/recorte-3.png" alt="recorte3" style="width:100%;">
                            </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Anterior</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Siguiente</span>
                            </a>
                    </div>
                </div>

                Deportito Sport Gym
                    
                </div>
                    <a href="{{ route('login') }}" type="button" class="btn btn-secondary">Iniciar Sesion</a>
                <br>
                <br>
                <footer class="bg-light text-center text-lg-start">
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2021 Copyright:
                        <a class="text-dark" href="https://www.facebook.com/SoftDragon-100810445404548">SoftDragon</a>
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>
            
        </div>

        
    </body>
</html>
