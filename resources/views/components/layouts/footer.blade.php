<footer class="bg-primary-700">
    <div class="lg:flex w-full">
        <div class="w-1/2 lg:w-1/5 mx-6 mt-8">
            <div class="pt-8 lg:pt-0">
                <a href="{{route('home')}}">
                    <x-app-logo class="w-1/4 sm:w-1/2 lg:w-full"/>
                </a>
            </div>
        </div>

        <div class="w-full lg:w-3/5">
            <div class="grid grid-cols-3 p-4">
                <div>
                    <h6 class="text-md text-white font-bold"> Pages </h6>
                    <div>
                        <x-links.footer-nav href="{{route('home')}}">
                            Home
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('about')}}">
                            About
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('custom-framing')}}">
                            Framing
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('printing')}}">
                            Printing
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('contact')}}">
                            Contact
                        </x-links.footer-nav>
                    </div>
                </div>

                <div>
                    <h6 class="text-md text-white font-bold"> Services </h6>
                    <div>
                        <x-links.footer-nav href="{{route('services.framing.acrylic')}}">
                            Acrylic
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('services.framing.canvas')}}">
                            Canvas
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('services.framing.indigenous')}}">
                            Indigenous Art
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('services.framing.jigsaw')}}">
                            Jigsaws
                        </x-links.footer-nav>
                    </div>
                </div>

                <div>
                    <x-links.footer-nav href="{{route('services.framing.medals-memorabilia')}}">
                        Medals & Memorabilia
                    </x-links.footer-nav>

                    <x-links.footer-nav href="{{route('services.framing.mirror')}}">
                        Mirror
                    </x-links.footer-nav>

                    <x-links.footer-nav href="{{route('services.framing.prints-posters')}}">
                        Prints, Posters & Photos
                    </x-links.footer-nav>

                    <x-links.footer-nav href="{{route('services.framing.handcrafted')}}">
                        Hand Crafted Artwork
                    </x-links.footer-nav>

                    <x-links.footer-nav href="{{route('services.framing.restorations')}}">
                        Restorations
                    </x-links.footer-nav>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-100 flex justify-between px-4 py-4">
        <div class="text-sm flex text-gray-200 gap-x-6 my-auto">
            <p>&copy; 2023 Framed Just For You. All rights reserved.</p>

            <a href="{{route('sitemap')}}" class="hidden sm:flex"> sitemap</a>
        </div>

        <div class="text-xs text-gray-200">
            <div class="flex space-x-4">
                <a
                    href="https://www.facebook.com/framedjustforyou/"
                    aria-label="Framed Just For You Facebook"
                    class="text-white cursor-pointer"
                >
                    <span class="sr-only"> Facebook </span>
                    <x-icons.socials.facebook/>
                </a>

                <a
                    href="https://www.instagram.com/framedjust4u/"
                    aria-label="Framed Just For You Instagram"
                    class="text-white cursor-pointer"
                >
                    <span class="sr-only"> Instagram </span>
                    <x-icons.socials.instagram/>
                </a>
            </div>
        </div>
    </div>
</footer>
