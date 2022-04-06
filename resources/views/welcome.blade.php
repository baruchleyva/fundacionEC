<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    </head>
    <body style="">
        <nav class="navbar navbar-expand-lg" style="background-color: #4FA0DC ;">

            <ul class="nav navbar-nav ml-auto" style="background-color: #4FA0DC ;">
                <!-- Authentication Links -->
                <a href="{{ url('/home') }}" style="color: white;">

                    INICIO
                </a>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="background-color: #4FA0DC ; float: right;" >
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: white;">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: white;">Entrar</a> |
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: white;">Registrarse</a>
                        @endif
                    @endauth
                </div>
                @endif
            </ul>
        </nav>
        <div class="flex-center position-ref full-height" style="background-color: ; ">
            <div class="content">
                <div align="center">
                    <img src="{{asset('img/libro1.jpg')}}" align="center" height="100%" width="700px" class="responsive"/>
                </div>
            </div>
        </div>
    </body>
</html>
