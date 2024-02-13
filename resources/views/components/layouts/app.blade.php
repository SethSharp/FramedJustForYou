<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', config('app.name'))
    </title>

    <meta name="keywords"
          content="Gold Coast Picture Framing, Framed Just For you, custom picture framing, Gold Coast, Framing Services, Queensland Framing">
    <meta name="description"
          content="Framed Just For You is Gold Coasts best picture framing business. We have been locally owned and operated for over 20 years and with 60+ years of experience we produce amazing results for our customers all over the Gold Coast and the country!">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite('resources/js/public.js')

    @routes('public')
</head>
<body class="font-sans antialiased">

<div class="min-h-screen">
    <x-banners.main/>

    <div
        x-data="{
            sidebarOpen: false
        }"
    >
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 ">
            <div
                class="relative flex h-24 w-full items-center justify-between lg:border-b lg:border-primary-400 lg:border-opacity-25"
            >
                <div class="grid grid-cols-2 w-full">
                    <div class="flex-shrink-0 w-48">
                        <a href="{{route('new.home')}}" class="w-44">
                            <x-app-logo/>
                        </a>
                    </div>

                    <div class="hidden lg:block my-auto">
                        <div class="flex space-x-6 justify-end">
                            <x-links.nav
                                href="{{route('new.home')}}"
                                active="{{true}}"
                            >
                                Home
                            </x-links.nav>

                            <x-links.nav href="{{route('new.about')}}">
                                About
                            </x-links.nav>

                            <x-links.services-mega-menu/>

                            <x-links.nav href="{{route('new.contact')}}">
                                Contact
                            </x-links.nav>
                        </div>
                    </div>
                </div>

                <div class="flex lg:hidden">
                    <!-- Mobile menu button -->
                    <button
                        class="relative inline-flex items-center justify-center rounded-md bg-primary-600 p-2 text-primary-200 hover:bg-primary-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-600"
                    >
                        <span class="sr-only">Open main menu</span>

                        <div x-show="!sidebarOpen" x-on:click="sidebarOpen = true">
                            <x-icons.bars-3/>
                        </div>

                        <div x-show="sidebarOpen" x-on:click="sidebarOpen = false">
                            <x-icons.x-mark/>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div class="lg:hidden">
            <div class="border-t border-primary-700">
                <div class="space-y-4 px-2 my-4">
                    <x-links.nav href="{{route('new.home')}}">
                        Home
                    </x-links.nav>

                    <x-links.nav href="{{route('new.about')}}">
                        About
                    </x-links.nav>

                    <x-links.services-mega-menu/>

                    <x-links.nav href="{{route('new.contact')}}">
                        Contact
                    </x-links.nav>
                </div>
            </div>
        </div>

        <div class="z-20">
            <main class="relative z-30">
                <div
                    class="px-4 pb-12 sm:px-6 lg:px-8 relative z-30"
                >
                    <div class="rounded-lg bg-white py-6 px-8 sm:px-2 shadow">
                        {{ $slot }}
                    </div>
                </div>
            </main>

            <x-layouts.footer/>
        </div>
    </div>
</div>
</body>
</html>
