<x-layouts.app>
    <x-section.wrapper>
        <div class="min-h-screen">
            <div class="grid lg:grid-cols-4 xl:grid-cols-4 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-secondary-800">Main Pages</h3>

                    <ul class="list-inside">
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('home')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('about')}}">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('custom-framing')}}">
                                Framing
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('printing')}}">
                                Printing
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('contact')}}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- For /services/custom-framing parent route -->
                <div>
                    <h3 class="text-lg font-semibold text-secondary-800">Framing Services</h3>

                    <ul class="list-inside">
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.acrylic')}}">
                                Acrylic
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.canvas')}}">
                                Canvas
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.indigenous')}}">
                                Indigenous Art
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.jigsaw')}}">
                                Jigsaws
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.medals-memorabilia')}}">
                                Medals & Memorabilia
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.mirror')}}">
                                Mirror
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.prints-posters')}}">
                                Prints, Posters, and Photos
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.handcrafted')}}">
                                Handcrafted
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.framing.restorations')}}">
                                Restorations
                            </a>
                        </li>
                        <li>
                            <a class="text-primary-600 hover:text-primary-400 font-medium"
                               href="{{route('services.other')}}">
                                Other
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </x-section.wrapper>
</x-layouts.app>
