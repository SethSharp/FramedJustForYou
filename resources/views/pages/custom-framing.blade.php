<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Custom Picture Framing
                </x-slot>

                <x-slot name="content">
                    <div class="md:flex gap-4">
                        <div class="md:w-3/5">
                            <b>Custom Picture Framing </b> has so many branches, lucky for you, we pretty much cover everything. From Jerseys, Medals
                            Posters and Photos. Right through to physical objects such as Footballs, golf balls and even shovels. Whatever means a lot to
                            you, we can frame it!

                            <br />
                            <br />

                            At Framed Just For You, we specialize in custom framing that transforms your cherished memories into timeless works of art.
                            Our expert craftsmen meticulously tailor each frame to suit your unique style and preserve the essence of your precious moments.
                        </div>
                        <div class="md:w-2/5 px-4 flex justify-center">
                            <div class="my-auto">
                                <x-headings.secondary> Whats on this page</x-headings.secondary>

                                <div class="ml-2">
                                    <uL>
                                        <li class="my-4">
                                            <a href="#services" class="flex">
                                                <x-icons.plus />
                                                Custom Framing Services
                                            </a>
                                        </li>
                                        <li class="my-4">
                                            <a href="#approach" class="flex">
                                                <x-icons.plus />
                                                Our Approach
                                            </a>
                                        </li>
                                        <li class="my-4">
                                            <a href="#faq" class="flex">
                                                <x-icons.plus />
                                                FAQ
                                            </a>
                                        </li>
                                    </uL>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <x-headings.secondary> Australian Made </x-headings.secondary>

                        <div>
                            Experience the unmatched longevity of our frames, crafted exclusively with
                            Australian-sourced materials. By supporting local artisans and harnessing
                            the durability of native resources, we ensure that your frame becomes a
                            timeless keepsake, built to last a lifetime. Beyond aesthetics, choosing one
                            of our frames is an investment in quality and sustainability.
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content id="services">
                <x-slot name="title"> Services </x-slot>

                <x-slot name="content">
                    <p></p>

                    <div>
                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                            <x-cards.arch
                                image="acrylic/shovel.webp"
                                title="Acrylic"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Australian Made Framing Kits"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Canvas"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Indigenous Art"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Jigsaws"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Medals & Memorabilia"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Mirror"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Original Artwork"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Prints, Posters & Photos"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.arch
                                image="matboards/matboard-cutter.webp"
                                title="Handcrafted"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content id="approach">
                <x-slot name="title"> Our Approach </x-slot>

                <x-slot name="content">
                    <p></p>

                    <div>

                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content id="faq">
                <x-slot name="title">
                    FAQ
                </x-slot>

                <x-slot name="content">
                    <p></p>

                    <div>

                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

    </x-section.section>
</x-layouts.app>
