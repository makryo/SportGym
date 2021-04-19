<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Deportito Sport Gym</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script language="JavaScript">
    function doSearch(){
        const tableReg = document.getElementById('datos');
        const searchText = document.getElementById('searchTerm').value.toLowerCase();
        let total = 0;
        
        for (let i = 1; i < tableReg.rows.length; i++) {
       
            if (tableReg.rows[i].classList.contains("noSearch")) {continue;}
                
                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
               
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
        
                if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                    found = true;
                    total++;
                }
            }
    
            if (found) {
                tableReg.rows[i].style.display = '';
            } else {
                tableReg.rows[i].style.display = 'none';
            }
            }
            // mostramos las coincidencias
        const lastTR=tableReg.rows[tableReg.rows.length-1];
        const td=lastTR.querySelector("td");
        lastTR.classList.remove("hide", "red");
        if (searchText == "") {
            lastTR.classList.add("hide");
        } else if (total) {
            td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
        } else {
            lastTR.classList.add("red");
            td.innerHTML="No se han encontrado coincidencias";
        }
    }
    
    </script>
    
    <script language="JavaScript">
    
    </script>
    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link href="https://bootswatch.com/4/cyborg/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Deportito Sport Gym
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-dark" href="https://www.facebook.com/SoftDragon-100810445404548">SoftDragon</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>
</html>
