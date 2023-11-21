<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta related -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Framed Just For You - Custom Picture Framing - Gold Coast </title>
        <meta name="keywords" content="FramedJustForYou, Framed Just For you, custom frames, picture framing, Gold Coast framing, framing services">
        <meta name="description" content="Framed Just For You is Gold Coasts best picture framing business. We have been locally owned and operated for over 20 years and with 60+ years of experience producing amazing results for our clients all over the Gold Coast and the country.">

        <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

        <title inertia>{{ config('app.name', 'Framed Just For You') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
