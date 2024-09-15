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
                    <div class="lg:flex gap-4">
                        <div class="lg:w-3/5">
                            <b>Custom Picture Framing </b> has so many branches, lucky for you, we pretty much cover
                            everything. From Jerseys, Medals,
                            Posters and Photos. Right through to physical objects such as Footballs, golf balls and even
                            shovels - anything that has significant value to you we can frame it!

                            <br/>
                            <br/>

                            At Framed Just For You, we specialise in custom framing that transforms your cherished
                            memories into timeless works of art.
                            Our expert craftsmen meticulously tailor each frame to suit your unique style and preserve
                            the essence of your precious moments.
                        </div>

                        <div class="lg:w-2/5 mt-6 lg:mt-0 flex justify-center">
                            <x-section.whats-on-this-page :links="$links"/>
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
                                src="acrylic/football.webp"
                                alt="Football in case"
                                title="Acrylic"
                                href="{{ route('services.framing.acrylic') }}"
                            />

                            <x-cards.item
                                src="canvas/tiger-canvas.webp"
                                alt="Tiger painting on a rectangle canvas"
                                title="Canvas"
                                href="{{ route('services.framing.canvas') }}"
                            />

                            <x-cards.item
                                src="Indigenous/indigenous.webp"
                                alt="Indigenous print"
                                title="Indigenous Art"
                                href="{{ route('services.framing.indigenous') }}"
                            />

                            <x-cards.item
                                src="jigsaw/giraffe.webp"
                                alt="Completed Giraffe Jigsaw - not framed"
                                title="Jigsaws"
                                href="{{ route('services.framing.jigsaw') }}"
                            />

                            <x-cards.item
                                src="matboards/gymnastics.webp"
                                alt="Gymnastics frame with multiple cutouts for medals"
                                title="Medals & Memorabilia"
                                href="{{ route('services.framing.medals-memorabilia') }}"
                            />

                            <x-cards.item
                                src="mirror/small-mirror.webp"
                                alt="Mirror Framed"
                                title="Mirror"
                                href="{{ route('services.framing.mirror') }}"
                            />

                            <x-cards.item
                                src="prints-photos/picture-2.webp"
                                alt="Print of a mother & child in the safari"
                                title="Prints, Posters & Photos"
                                href="{{ route('services.framing.prints-posters') }}"
                            />

                            <x-cards.item
                                src="handcrafted/pressed.webp"
                                alt="Handcrafted piece of a person holding an umbrella with a light post & a couple in the background"
                                title="Handcrafted"
                                href="{{ route('services.framing.handcrafted') }}"
                            />

                            <x-cards.item
                                src="restorations/reprint-and-frame.webp"
                                alt="Reprinted and Frame of a old wedding photo"
                                title="Restorations"
                                href="{{ route('services.framing.restorations') }}"
                            />

                            <x-cards.item
                                src="readyMade/graduation.webp"
                                alt="Graduation frame"
                                title="Other"
                                href="{{ route('services.other') }}"
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
                                    class="h-96 mx-auto"
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
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
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
                                Custom Framing is your choice, you are not subjected to abc items, you have a-z and more
                                - so it depends on your selection of high quality materials that we stock.
                            </p>
                        </div>

                        <div class="p-4 text-center">
                            <h4 class="text-black font-semibold">
                                How do I decide what is best considering the options?
                            </h4>

                            <p class="mt-4">
                                With our vast selection of frames, matboard and glass choices it can be tough to come to
                                a decision. But luckily
                                that process is made easy with our staff who have an eye for design and can help you
                                decide.
                            </p>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
