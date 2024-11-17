<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title', 'Framed Just For You')
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="{{config('framed.keywords')}}">

    <meta name="keywords"
          content="@yield('keywords', 'gold coast framing, custom framing gold coast')">

    <meta name="description"
          content="@yield('description', config('framed.description'))">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Alpine -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"
            integrity="sha384-eA6+k1peuuIgxPHwWoQHx6OoDZ7hFJ+SKfMOhop5+zMV4SWR5OWBMatbIdoqA4lZ"
            crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
            integrity="sha384-iZD2X8o1Zdq0HR5H/7oa8W30WS4No+zWCKUPD7fHRay9I1Gf+C4F8sVmw7zec1wW"
            crossorigin="anonymous"></script>

    @vite('resources/css/app.css')
</head>
<body class="font-mont font-medium antialiased">
<main class="bg-secondary-100">
    <x-banners.main/>

    <div>
        <x-navigation/>

        <div class="z-20">
            <div class="relative min-h-screen">
                <header>
                    @yield('header')
                </header>

                <section class="relative z-10 leading-loose">
                    {{ $slot }}
                </section>
            </div>

            <x-layouts.footer/>
        </div>
    </div>
</main>
</body>
</html>
