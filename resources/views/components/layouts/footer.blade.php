<footer class="bg-primary-700">
    <div class="lg:flex w-full">
        <div class="w-1/2 lg:w-1/5 mx-6 mt-8">
            <div class="pt-8 lg:pt-0">
                <a href="{{route('new.home')}}">
                    <x-app-logo class="w-1/4 sm:w-1/2 lg:w-full"/>
                </a>
            </div>
        </div>

        <div class="w-full lg:w-4/5">
            <div class="grid grid-cols-3 my-4">
                <div>
                    <h3 class="text-lg text-gray-300"> Pages </h3>
                    <div>
                        <x-links.footer-nav href="{{route('new.home')}}" active="{{request()->route()->getName() === 'new.home'}}">
                            Home
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.about')}}" active="{{request()->route()->getName() === 'new.about'}}">
                            About
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.custom-framing')}}" active="{{request()->route()->getName() === 'new.custom-framing'}}">
                            Custom Framing
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.printing')}}" active="{{request()->route()->getName() === 'new.printing'}}">
                            Printing
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.contact')}}" active="{{request()->route()->getName() === 'new.contact'}}">
                            Contact
                        </x-links.footer-nav>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg text-gray-300"> Services </h3>
                    <div>
                        <x-links.footer-nav href="{{route('new.home')}}" active="{{request()->route()->getName() === 'new.home'}}">
                            Acrylic
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.about')}}" active="{{request()->route()->getName() === 'new.about'}}">
                            Australian Made
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.custom-framing')}}" active="{{request()->route()->getName() === 'new.custom-framing'}}">
                            Canvas Stretching
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.printing')}}" active="{{request()->route()->getName() === 'new.printing'}}">
                            Indigenous Art
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.contact')}}" active="{{request()->route()->getName() === 'new.contact'}}">
                            Jigsaws
                        </x-links.footer-nav>
                    </div>
                </div>

                <div>
                    <div>
                        <x-links.footer-nav href="{{route('new.home')}}" active="{{request()->route()->getName() === 'new.home'}}">
                            Medals & Memorabilia
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.about')}}" active="{{request()->route()->getName() === 'new.about'}}">
                            Original Artwork
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.custom-framing')}}" active="{{request()->route()->getName() === 'new.custom-framing'}}">
                            Prints, Posters & Photos
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.printing')}}" active="{{request()->route()->getName() === 'new.printing'}}">
                            Hand Crafted Artwork
                        </x-links.footer-nav>

                        <x-links.footer-nav href="{{route('new.contact')}}" active="{{request()->route()->getName() === 'new.contact'}}">
                            Restorations
                        </x-links.footer-nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-100 flex justify-between px-4 py-4">
        <div class="text-sm flex text-gray-200 gap-x-6 my-auto">
            <p>&copy; 2023 Framed Just For You. All rights reserved.</p>

            <a href="{{route('sitemap')}}"> sitemap</a>
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
