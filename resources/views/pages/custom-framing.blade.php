@section('title', 'Custom Framing - ' . config('app.name'))
@section('description', 'Custom Framing has been our specialty for over 20 years & with 60+ years of experience we offer amazing results! With our extensive range there is nothing we cannot frame')

<x-layouts.app>
    @section("header")
        <x-hero
            src="/framing/framing.webp"
            alt="Our huge selection of custom picture frames"
            overline="Specialist Framers"
        >
            <x-slot name="title">Custom Picture <br> Framing</x-slot>

            <x-slot name="subtitle">
                Over 60 years of combined experience. If it means something to you, we can frame it.
            </x-slot>

            <div class="flex flex-wrap gap-3 mt-6 sm:mt-8">
                <a
                    href="{{ route('contact') }}"
                    class="bg-primary-500 px-4 py-2 sm:px-6 sm:py-3 rounded-lg text-white text-sm sm:text-base font-semibold hover:bg-primary-600 transition-colors"
                >
                    Get a Quote
                </a>
                <a
                    href="#services"
                    class="border-2 border-white px-4 py-2 sm:px-6 sm:py-3 rounded-lg text-white text-sm sm:text-base font-semibold hover:bg-white hover:text-secondary-800 transition-colors"
                >
                    Browse Services
                </a>
            </div>
        </x-hero>
    @endsection

    {{-- Intro --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <x-section.intro title="We Can Frame Anything" maxWidth="max-w-3xl">
                <p class="text-secondary-500 mt-6 leading-relaxed">
                    <strong>Custom Picture Framing</strong> has so many branches — lucky for you, we cover everything.
                    From jerseys, medals, posters and photos, right through to physical objects like footballs, golf balls,
                    and even shovels. If it has significant value to you, we can frame it.
                </p>
                <p class="text-secondary-500 mt-4 leading-relaxed">
                    Our expert craftsmen meticulously tailor each frame to suit your unique style and preserve
                    the essence of your precious moments.
                </p>

                <div class="flex flex-wrap justify-center gap-3 mt-8">
                    <a href="#services" class="text-sm text-secondary-500 hover:text-primary-500 transition flex items-center gap-1.5 border border-secondary-200 rounded-full px-4 py-1.5">
                        <x-icons.plus class="size-3.5" /> Services
                    </a>
                    <a href="#approach" class="text-sm text-secondary-500 hover:text-primary-500 transition flex items-center gap-1.5 border border-secondary-200 rounded-full px-4 py-1.5">
                        <x-icons.plus class="size-3.5" /> Our Approach
                    </a>
                    <a href="#faq" class="text-sm text-secondary-500 hover:text-primary-500 transition flex items-center gap-1.5 border border-secondary-200 rounded-full px-4 py-1.5">
                        <x-icons.plus class="size-3.5" /> FAQ
                    </a>
                </div>
            </x-section.intro>
        </x-section.wrapper>
    </x-section.section>

    {{-- Services --}}
    <x-section.section id="services" class="!bg-secondary-50 py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">Our Services</x-slot>

                <x-slot name="content">
                    <p>
                        What we offer is <strong>limitless</strong> — these are a handful of the most common services we provide.
                        Have something different in mind? We're more than capable of making something amazing.
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        <x-cards.image-link size="sm"
                            src="/acrylic/football.webp"
                            alt="Football in case"
                            title="Acrylic"
                            href="{{ route('services.framing.acrylic') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/canvas/tiger-canvas.webp"
                            alt="Tiger painting on a rectangle canvas"
                            title="Canvas"
                            href="{{ route('services.framing.canvas') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/indigenous/indigenous.webp"
                            alt="Indigenous print"
                            title="Indigenous Art"
                            href="{{ route('services.framing.indigenous') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/jigsaw/giraffe.webp"
                            alt="Completed Giraffe Jigsaw - not framed"
                            title="Jigsaws"
                            href="{{ route('services.framing.jigsaw') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/matboards/gymnastics.webp"
                            alt="Gymnastics frame with multiple cutouts for medals"
                            title="Medals & Memorabilia"
                            href="{{ route('services.framing.medals-memorabilia') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/mirror/small-mirror.webp"
                            alt="Mirror Framed"
                            title="Mirror"
                            href="{{ route('services.framing.mirror') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/prints-photos/picture-2.webp"
                            alt="Print of a mother & child in the safari"
                            title="Prints, Posters & Photos"
                            href="{{ route('services.framing.prints-posters') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/handcrafted/pressed.webp"
                            alt="Handcrafted piece of a person holding an umbrella with a light post & a couple in the background"
                            title="Handcrafted"
                            href="{{ route('services.framing.handcrafted') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/restorations/reprint-and-frame.webp"
                            alt="Reprinted and Frame of a old wedding photo"
                            title="Restorations"
                            href="{{ route('services.framing.restorations') }}"
                        />

                        <x-cards.image-link size="sm"
                            src="/readyMade/graduation.webp"
                            alt="Graduation frame"
                            title="Other"
                            href="{{ route('services.other') }}"
                        />
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- Our Approach --}}
    <x-section.section id="approach" class="py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">Our Approach</x-slot>

                <x-slot name="content">
                    <p>
                        Whether your custom framing project is a valuable artwork by a renowned artist or your
                        grandchild's arts and crafts project, it will receive the highest attention to detail
                        and be finished to the finest standards.
                    </p>

                    <div class="space-y-12">
                        <x-cards.feature image-position="left">
                            <x-slot name="image">
                                <x-image
                                    src="/framing/selection.webp"
                                    alt="Over 1000 frames to choose from"
                                    class="h-96 mx-auto"
                                    loading="lazy"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Our custom framing service, with over 1000 frames to choose
                                from, caters to every customer's unique preferences and needs.
                                We offer an extensive selection of frames that suits any style
                                or project.
                            </x-slot>
                        </x-cards.feature>

                        <x-cards.feature image-position="right">
                            <x-slot name="image">
                                <x-image
                                    src="/framing/glassChoices.webp"
                                    alt="The difference between clear and ultra vue glass"
                                    class="mx-auto"
                                    loading="lazy"
                                />
                            </x-slot>

                            <x-slot name="content">
                                We offer a comprehensive selection of glass types to complement
                                your custom frame:
                                <ul class="list-disc list-inside mt-2 space-y-1">
                                    <li>Clear Glass</li>
                                    <li>UV Clear Glass 97% Non Fading</li>
                                    <li>Non Reflective Glass</li>
                                    <li>Conservation Non Reflective Glass 97% Non Fading</li>
                                    <li>Museum Glass</li>
                                    <li>Ultra-view</li>
                                    <li>True Vue Classic Art Glass</li>
                                </ul>
                            </x-slot>
                        </x-cards.feature>

                        <x-cards.feature image-position="left">
                            <x-slot name="image">
                                <x-image
                                    src="/framing/matboards.webp"
                                    alt="Our massive selection of matboards"
                                    class="mx-auto"
                                    loading="lazy"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Our mat boards are top quality and acid free. We use Crescent-Neilsen,
                                Bainbridge, Alpha, Peterborough Museum Core, Artique Conservation,
                                Archival Rag and Museum mats.
                            </x-slot>
                        </x-cards.feature>

                        <x-cards.feature image-position="right">
                            <x-slot name="image">
                                <x-image
                                    src="/framing/framing.webp"
                                    alt="More of our huge range of frames"
                                    class="mx-auto"
                                    loading="lazy"
                                />
                            </x-slot>

                            <x-slot name="content">
                                We use all quality wood and metal picture frames — no synthetics.
                                Frames are sourced from all over the world and we have over 1000 samples
                                to choose from, including brands such as Larson-Juhl and Antons Mouldings.
                            </x-slot>
                        </x-cards.feature>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- FAQ --}}
    <x-section.section id="faq" class="!bg-secondary-50 py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">FAQ</x-slot>

                <x-slot name="content">
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl border border-secondary-200 p-6">
                            <h4 class="text-secondary-800 font-semibold text-base">
                                How much does Custom Framing cost?
                            </h4>
                            <p class="mt-3 text-secondary-500 text-sm leading-relaxed">
                                There's no special formula — custom framing has a lot of variables that affect
                                the final price. The best way to find out is to bring your piece in for a quote.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl border border-secondary-200 p-6">
                            <h4 class="text-secondary-800 font-semibold text-base">
                                Can it be expensive?
                            </h4>
                            <p class="mt-3 text-secondary-500 text-sm leading-relaxed">
                                Custom framing is your choice — you're not limited to a set range. It ultimately
                                depends on your selection of materials, and we stock options across every price point.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl border border-secondary-200 p-6">
                            <h4 class="text-secondary-800 font-semibold text-base">
                                How do I decide what's best?
                            </h4>
                            <p class="mt-3 text-secondary-500 text-sm leading-relaxed">
                                With our vast selection of frames, matboard and glass choices it can feel overwhelming —
                                but our staff have an eye for design and will help you land on something you'll love.
                            </p>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- CTA --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <div class="text-center max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-secondary-800">Ready to frame something special?</h3>
                <p class="text-secondary-500 mt-2">
                    Come into our Labrador store or get in touch — we'd love to bring your vision to life.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <x-links.primary href="{{ route('contact') }}">
                        Get a Quote
                    </x-links.primary>
                    <x-links.primary href="{{ route('printing') }}">
                        Printing & Canvas
                    </x-links.primary>
                </div>

                <div class="mt-6 flex flex-wrap justify-center gap-4">
                    <x-links.other-secondary href="{{ route('about') }}">
                        Meet the team
                    </x-links.other-secondary>
                    <x-links.other-secondary href="{{ route('services.other') }}">
                        Other Services
                    </x-links.other-secondary>
                </div>
            </div>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
