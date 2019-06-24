<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DelyFood</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>

<body>
    @section('header')
    @show
    <header>
        <div class="links">
            <a href="{{route('index')}}" class="first">Inicio</a>
            <a href="{{route('gallery')}}">Ver</a>
            <a href="{{route('login')}}" class="third">Iniciar sesion/Registrarse</a>
        </div>
        <div class="links">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </header>
        <main>
            @yield('content')
        </main>
    <footer>
        <div>
            <p>Angel Afonso</p>
            <p>Hector Zurga</p>
        </div>
        <div>
            {{now()}}
        </div>
    </footer>
</body>

</html>