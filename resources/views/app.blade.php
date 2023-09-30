<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta related -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="FramedJust4You, Framed Just For you, custom frames, picture framing, Gold Coast framing, framing services">
        <meta name="description" content="Framed Just For You is Gold Coasts best Picture framing business. We have been locally owned and operated for over 20 years and produce amazing results for our clients all over the Gold Coast and the country.">

        <title inertia>{{ config('app.name', 'Framed Just For You') }}</title>

{{--        <link rel="canonical" href="https://www.framedjustforyou.com/">--}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
