<footer class="bg-primary-800">
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-4">
                <a href="/">
                    @if (now()->month === 12)
                        <img src="{{ asset('images/christmas-logo.png') }}"
                             alt="FramedJustForYou logo"
                             width="72" height="72" class="w-52">
                    @else
                        <img src="{{ asset('images/logo-white.png') }}"
                             alt="FramedJustForYou logo"
                             width="72" height="72" class="w-52">
                    @endif
                </a>

                <p class="text-sm text-secondary-300 max-w-xs">
                    Your go-to destination for custom framing on the Gold Coast. Over three decades of craftsmanship.
                </p>

                <div class="flex space-x-3">
                    <a href="https://www.instagram.com/framedjust4u/" target="_blank"
                       class="text-secondary-400 hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <x-icons.socials.instagram/>
                    </a>
                    <a href="https://www.facebook.com/framedjustforyou/" target="_blank"
                       class="text-secondary-400 hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <x-icons.socials.facebook/>
                    </a>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-secondary-200">What we offer</h3>
                        <ul role="list" class="mt-4 space-y-3">
                            <li>
                                <a href="{{route('custom-framing')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Custom Framing
                                </a>
                            </li>
                            <li>
                                <a href="{{route('printing')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Printing
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-secondary-200">Our Services</h3>
                        <ul role="list" class="mt-4 space-y-3">
                            <li>
                                <a href="{{route('services.framing.acrylic')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Acrylic
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.canvas')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Canvas
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.indigenous')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Indigenous Art
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.jigsaw')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Jigsaws
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.medals-memorabilia')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Medals & Memorabilia
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <ul role="list" class="mt-9 space-y-3">
                            <li>
                                <a href="{{route('services.framing.mirror')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Mirror
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.prints-posters')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Prints Posters & Photos
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.handcrafted')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Handcrafted Artwork
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.framing.restorations')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Restorations
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-secondary-200">The Business</h3>
                        <ul role="list" class="mt-4 space-y-3">
                            <li>
                                <a href="{{route('about')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Contact us
                                </a>
                            </li>
                            <li>
                                <a href="{{route('privacy-policy')}}"
                                   class="text-sm text-secondary-400 hover:text-white transition-colors">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 border-t border-secondary-600/30 pt-8">
            <p class="text-sm text-center text-secondary-400">
                {!! config('framed.copyright')  !!}
                Made with <span class="text-primary-400">&hearts;</span> by framing enthusiasts at
                <a href="/" class="text-secondary-300 hover:text-white transition-colors">Framed Just For You</a>.
            </p>
        </div>
    </div>
</footer>
