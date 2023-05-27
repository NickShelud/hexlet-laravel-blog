<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
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