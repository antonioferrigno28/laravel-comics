<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    {{-- componente header --}}
    @include('partials/header')

    {{-- per dire che il contenuto deve essere messo qui in mezzo si usa yield --}}
    @yield('contenuto')

    {{-- componente footer con dot notation, è la stessa cosa --}}
    @include('partials.footer')
</body>

</html>
