<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        @include('partials.nav')

        {{ $slot }}

        @isset($sidebar)
            <div>
                <h2>Sidebar</h2>
                <p>{{ $sidebar }}</p>
            </div>
        @endisset

    </body>
</html>