<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to kubos!</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body>
        <div class="container text-center">
            <h1 class="sitein">This site is building by: </h1>
            <img class="build" src="{{asset('img/kb.png')}}" alt="kubos">
        </div>
    </body>
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
</html>
