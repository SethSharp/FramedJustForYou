<footer class="bg-primary-800">
    <div class="container mx-auto p-0 md:p-8 xl:px-0">
        <div class="mx-auto max-w-7xl px-6 pb-10 pt-16">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-4">
                    <div>
                        <a href="/">
                            <div class="flex items-center space-x-2 text-2xl font-medium">
                                <span>
                                    <img src="{{ asset('images/christmas-logo.png') }}"
                                         alt="FramedJustForYou logo"
                                         aria-label="Application logo"
                                         width="72" height="72" class="w-64">
                                </span>
                            </div>

                        </a>
                    </div>
                    <div class="max-w-md pr-16 text-md text-gray-200">
                        You goto for Custom Framing on the Gold Coast.
                    </div>
                    <div class="flex space-x-2">
                        <a href="https://www.instagram.com/framedjust4u/" target="_blank"
                           class="text-gray-200 hover:text-gray-200">
                            <span class="sr-only">Instagram</span>
                            <x-icons.socials.instagram/>
                        </a>
                        <a href="https://www.facebook.com/framedjustforyou/" target="_blank"
                           class="text-gray-200 hover:text-gray-200">
                            <span class="sr-only">Facebook</span>
                            <x-icons.socials.facebook/>
                        </a>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-md font-semibold leading-6 text-white">What we offer</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="{{route('custom-framing')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Custom Framing
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('printing')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Printing
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-md font-semibold leading-6 text-white">Our Services</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="{{route('services.framing.acrylic')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Acrylic
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.canvas')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Canvas
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.indigenous')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Indigenous Art
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.jigsaw')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Jigsaws
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.medals-memorabilia')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Medals & Memorabilia
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <ul role="list" class="mt-12 space-y-4">
                                <li>
                                    <a href="{{route('services.framing.mirror')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Mirror
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.prints-posters')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Prints Posters & Photos
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.handcrafted')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Handcrafted Artwork
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('services.framing.restorations')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Restorations
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-md font-semibold leading-6 text-white">The Company</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="{{route('about')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('contact')}}"
                                       class="text-md leading-6 text-gray-300 hover:text-gray-50">
                                        Contact us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 border-t border-gray-400/30 pt-8 sm:mt-20 lg:mt-24">
                <div class="text-md text-center text-white">
                    {!! config('framed.copyright')  !!}
                    <span class="text-gray-50">♥</span> by Framing enthusiasts at
                    <a rel="noopener" href="/">
                        Framed Just For You.
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
