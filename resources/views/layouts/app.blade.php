<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column">
        <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-start px-3">
            <a href="{{route('about.about')}}" class="text-white nav-link p-2">About</a>
            <a href="{{route('articles.index')}}" class="text-white nav-link p-2">Articles</a>
            <a href="{{route('articles.create')}}" class="text-white nav-link p-2">Create</a>
        </div>
        </nav>
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>