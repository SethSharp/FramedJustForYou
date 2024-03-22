<x-layouts.app>
    <x-section.wrapper>
        <div>
            <div>
                <div class="grid lg:grid-cols-4 xl:grid-cols-4 gap-6">
                    <div>
                        <h1 class="text-lg font-bold">Main Pages</h1>

                        <ul class="list-inside ml-2">
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.home')}}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.about')}}">
                                    About
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.custom-framing')}}">
                                    Custom Framing
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.printing')}}">
                                    Printing
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.contact')}}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- For /services/custom-framing parent route -->
                    <div>
                        <h1 class="text-lg font-bold">Framing Services</h1>

                        <ul class="list-inside ml-2">
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.acrylic')}}">
                                    Acrylic
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.canvas')}}">
                                    Canvas
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.indigenous')}}">
                                    Indigenous Art
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.jigsaw')}}">
                                    Jigsaws
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul class="list-inside ml-2">
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.medals-memorabilia')}}">
                                    Medals & Memorabilia
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.mirror')}}">
                                    Mirror
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.prints-posters')}}">
                                    Prints, Posters, and Photos
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.handcrafted')}}">
                                    Handcrafted
                                </a>
                            </li>
                            <li>
                                <a class="text-primary-600 hover:text-primary-400 font-medium"
                                   href="{{route('new.services.framing.restorations')}}">
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
        </div>
    </x-section.wrapper>
</x-layouts.app>
