<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta name="keywords"
          content="Gold Coast Picture Framing, Framed Just For you, custom picture framing, Gold Coast, Framing Services, Queensland Framing">

    <meta name="description"
          content="Framed Just For You is Gold Coasts best picture framing business. We have been locally owned and operated for over 20 years and with 60+ years of experience we produce amazing results for our customers all over the Gold Coast and the country!">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name'))
    </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/js/app.js')

    @routes('public')
</head>
<body class="font-mont font-medium antialiased">
<main class="min-h-screen">
{{--    <x-banners.main/>--}}

    <div>
        <x-navigation />

        <div class="z-20">
            <div class="relative">
                <header>
                    @if ($header)
                        {{ $header }}
                    @endif
                </header>

                <section class="relative z-10 leading-loose min-h-screen bg-gray-100">
                    <div>
                        {{ $slot }}
                    </div>
                </section>
            </div>

            <x-layouts.footer/>
        </div>
    </div>
</main>
</body>
</html>
