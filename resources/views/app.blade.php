<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Framed Just For You: Gold Coast Picture Framing') }}</title>
    @inertiaHead

    <meta name="keywords"
          content="Gold Coast Picture Framing, Framed Just For you, custom picture framing, Gold Coast, Framing Services, Queensland Framing">
    <meta name="description"
          content="Framed Just For You is Gold Coasts best picture framing business. We have been locally owned and operated for over 20 years and with 60+ years of experience we produce amazing results for our customers all over the Gold Coast and the country!">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    @vite('resources/js/app.js')

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @routes
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
