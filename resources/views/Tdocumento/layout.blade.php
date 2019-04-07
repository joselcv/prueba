<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC|Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/estilotd.css')}} ">
    <title>@yield('titulo')</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('logout') }}">Cerrar sesión</a>
                        <a class="dropdown-item" href="#">Clientes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cuentas</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>
<a href=""></a>
        @yield('contenido')

    <script src=" {{asset('js/jquery.min.js')}} "></script>
    <script src=" {{asset('js/bootstrap.js')}} "></script>    
</body>
</html>