<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/estiloLogin.css')}} ">
    <title>@yield('titulo')</title>
</head>
<body>
    @yield('contenido')
    <script src=" {{asset('js/jquery.min.js')}} "></script>
    <script src=" {{asset('js/bootstrap.js')}} "></script>
</body>
</html>