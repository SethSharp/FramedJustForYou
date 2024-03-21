@section('title', 'Custom Framing - ' . config('app.name'))
@section('description', 'Custom Framing has been our specialty for over 20 years & with 60+ years of experience we offer amazing results! With our extensive range there is nothing we cannot frame')

@php
    $links = [
        [
            'href' => '#services',
            'title' => 'Custom Framing Services'
        ],
        [
            'href' => '#approach',
            'title' => 'Approach'
        ],
        [
            'href' => '#faq',
            'title' => 'FAQ'
        ]
    ];
@endphp


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
                            <b>Custom Picture Framing </b> has so many branches, lucky for you, we pretty much cover
                            everything. From Jerseys, Medals
                            Posters and Photos. Right through to physical objects such as Footballs, golf balls and even
                            shovels. Whatever means a lot to
                            you, we can frame it!

                            <br/>
                            <br/>

                            At Framed Just For You, we specialize in custom framing that transforms your cherished
                            memories into timeless works of art.
                            Our expert craftsmen meticulously tailor each frame to suit your unique style and preserve
                            the essence of your precious moments.
                        </div>
                        <div class="md:w-2/5 px-4 flex justify-center">
                            <x-section.whats-on-this-page :links="$links" />
                        </div>
                    </div>

                    <div>
                        <x-headings.secondary> Australian Made</x-headings.secondary>

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
                <x-slot name="title"> Services</x-slot>

                <x-slot name="content">
                    <p>
                        What we offer is <b> limitless </b> these are a handful of the most common services we provide
                        for our customers. If you
                        have something different, we are still more then capable of making something amazing for it.
                    </p>

                    <div>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                            <x-cards.item
                                image="acrylic/shovel.webp"
                                alt="TODO"
                                title="Acrylic"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="matboards/matboard-cutter.webp"
                                alt="TODO"
                                title="Canvas"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="Indigenous/indigenous.webp"
                                alt="TODO"
                                title="Indigenous Art"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="jigsaw/giraffe.webp"
                                alt="TODO"
                                title="Jigsaws"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="matboards/asw-athlete.webp"
                                alt="TODO"
                                title="Medals & Memorabilia"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="matboards/matboard-cutter.webp"
                                alt="TODO"
                                title="Mirror"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="matboards/matboard-cutter.webp"
                                alt="TODO"
                                title="Original Artwork"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="matboards/matboard-cutter.webp"
                                alt="TODO"
                                title="Prints, Posters & Photos"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="handcrafted/pressed.webp"
                                alt="TODO"
                                title="Handcrafted"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />

                            <x-cards.item
                                image="restorations/reprint-and-frame.webp"
                                alt="TODO"
                                title="Restorations"
                                href="{{ route('services.other.matboard-cutting') }}"
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content id="approach">
                <x-slot name="title"> Our Approach</x-slot>

                <x-slot name="content">
                    <p>
                        Our approach is simple, whether your custom framing project is a
                        valuable artwork by a renowned artist or your grandchild's arts
                        and crafts project it will receive the highest attention to
                        detail while being finished to the finest standards.
                    </p>

                    <div class="space-y-12">
                        <x-cards.image-content-left>
                            <x-slot name="image">
                                <x-image
                                    src="framing/selection.webp"
                                    alt="Over 1000 frames to choose from"
                                    additionalClass="h-96 mx-auto"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Our custom framing service, with over 1000 frames to choose
                                from, caters to every customer's unique preferences and needs.
                                Just like a satisfied customer who values quality and variety,
                                we offer an extensive selection of frames that suits any style
                                or project.
                            </x-slot>
                        </x-cards.image-content-left>

                        <x-cards.image-content-right>
                            <x-slot name="image">
                                <x-image
                                    src="framing/glassChoices.webp"
                                    alt="The difference between clear and ultra vue glass"
                                />
                            </x-slot>

                            <x-slot name="content">
                                We offer a comprehensive selection of glass types to compliment
                                your custom frame:
                                <ul class="list-disc list-inside">
                                    <li>Clear Glass</li>
                                    <li>UV Clear Glass 97% Non Fading</li>
                                    <li>Non Reflective Glass</li>
                                    <li>Conservation Non reflective Glass 97% Non Fading</li>
                                    <li>Museum Glass</li>
                                    <li>Ultra-view</li>
                                </ul>
                            </x-slot>
                        </x-cards.image-content-right>

                        <x-cards.image-content-left>
                            <x-slot name="image">
                                <x-image
                                    src="framing/matboards.webp"
                                    alt="our massive selection of matboards"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Our mat boards are top quality and acid free. We use Crescent -
                                Neilsen, Bainbridge, Alpha, Peterborough Museum Core, Artique
                                conservation, Archival rag and Museum mats
                            </x-slot>
                        </x-cards.image-content-left>

                        <x-cards.image-content-right>
                            <x-slot name="image">
                                <x-image
                                    src="framing/framing.webp"
                                    alt="more of our huge range of frames"
                                />
                            </x-slot>

                            <x-slot name="content">
                                At Framed Just For You we use all quality wood and metal picture
                                frames, no synthetics are used. Frames are sourced from all over
                                the world and we have over 1000 samples to choose from. Our huge
                                selection of custom frames include brands such as Larson-Juhl
                                and Antons Mouldings.
                            </x-slot>
                        </x-cards.image-content-right>
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

                    <div class="grid grid-cols-3 gap4">
                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                Much much does Custom Framing cost?
                            </h4>

                            <p class="mt-4">
                                There is no special formula that allows us to estimate the cost of custom framing.
                                Custom Framing has a lot of different factors which affects the total in the end.
                            </p>
                        </div>

                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                Can it be expensive?
                            </h4>

                            <p class="mt-4">
                                It all depends on your item, but please consider that this is more then just purchasing
                                a product.
                                We supply high quality materials and have our framers put it together by hand. So in the
                                end it can be,
                                but its what you are paying for.
                            </p>
                        </div>

                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                How do I decide what is best considering the options?
                            </h4>

                            <p class="mt-4">
                                With our vast selection of frames, matboard and glass choices it can be tough to come to
                                a decision. but luckily
                                that process is made easy with our staff who have an eye for design and can help you
                                decide.
                            </p>
                        </div>

                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                What is a matboard and these other framing materials?
                            </h4>

                            <p class="mt-4">
                                A matboard allows your keepsake to sit on something providing multiple benefits. 1. It
                                adds extra depth and
                                with the correct colour selection style to your frame. 2. It prevents the item from
                                being damaged from behind.
                            </p>
                        </div>

                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                Does glass choice matter?
                            </h4>

                            <p class="mt-4">
                                Yes glass choice does matter. Glass that we stock each have their own benefits and
                                advantages, its down to
                                what is being framed and how much you are willing to spend.
                            </p>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

    </x-section.section>
</x-layouts.app>
