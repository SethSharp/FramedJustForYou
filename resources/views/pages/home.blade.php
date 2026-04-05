<x-layouts.app>
    @section("header")
        <div class="relative z-20">
            <x-image
                src="/store/store-front-right.webp"
                class="object-cover min-h-[400px] sm:min-h-[400px] md:min-h-[400px] lg:min-h-[450px] xl:min-h-[500px] w-full" style="object-position: center 65%"
                alt="Store Front Image"
            />
            <div class="absolute inset-0 bg-black/70">
                <div class="flex flex-col justify-center h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <x-heading variant="overline">
                        Your Custom Framers
                    </x-heading>

                    <h1 class="text-3xl sm:text-5xl md:text-6xl text-white mt-2 font-bold">
                        Framed Just <br> For You
                    </h1>

                    <p class="text-secondary-300 mt-3 text-base sm:text-lg max-w-lg">
                        Over three decades of craftsmanship on the Gold Coast. Preserving your cherished memories, beautifully.
                    </p>

                    <div class="flex flex-wrap gap-3 mt-6 sm:mt-8">
                        <a
                            href="{{ route('contact') }}"
                            class="bg-primary-500 px-4 py-2 sm:px-6 sm:py-3 rounded-lg text-white text-sm sm:text-base font-semibold hover:bg-primary-600 transition-colors"
                        >
                            Get a Quote
                        </a>
                        <a
                            href="{{ route('custom-framing') }}"
                            class="border-2 border-white px-4 py-2 sm:px-6 sm:py-3 rounded-lg text-white text-sm sm:text-base font-semibold hover:bg-white hover:text-secondary-800 transition-colors"
                        >
                            Our Services
                        </a>
                    </div>

                    <a
                        href="tel:0412068330"
                        class="mt-6 text-secondary-400 text-sm hover:text-white transition-colors"
                    >
                        Or call us at {{ config('framed.contact.telephone') }}
                    </a>
                </div>
            </div>
        </div>
    @endsection

    {{-- Why Us — stat row + brief intro --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <div class="text-center max-w-2xl mx-auto mb-12">
                <x-heading variant="strikethrough">
                    Why Us?
                </x-heading>
                <p class="text-secondary-500 mt-6 leading-relaxed">
                    At Framed Just For You, we're more than a framing business — we're a local institution
                    with a passion for preserving your cherished memories in the most beautiful way.
                </p>
            </div>

            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:w-3/4 mx-auto"
                x-data="{ shown: false }"
                x-intersect.once="shown = true"
            >
                <div class="text-center">
                    <div
                        class="text-3xl md:text-4xl font-bold text-primary-500"
                        x-data="{ val: 0 }"
                        x-effect="if (shown) { let end = 30; let step = Math.ceil(end / 30); let i = setInterval(() => { val += step; if (val >= end) { val = end; clearInterval(i); } }, 40); }"
                        x-text="val + '+'"
                    >0</div>
                    <div class="text-sm text-secondary-500 mt-1">Years Experience</div>
                </div>
                <div class="text-center">
                    <div
                        class="text-3xl md:text-4xl font-bold text-primary-500"
                        x-data="{ val: 0 }"
                        x-effect="if (shown) { let end = 10; let step = 1; let i = setInterval(() => { val += step; if (val >= end) { val = end; clearInterval(i); } }, 80); }"
                        x-text="val + '+'"
                    >0</div>
                    <div class="text-sm text-secondary-500 mt-1">Framing Services</div>
                </div>
                <div class="text-center">
                    <div
                        class="text-3xl md:text-4xl font-bold text-primary-500"
                        x-data="{ val: 0 }"
                        x-effect="if (shown) { let end = 5; let step = 1; let i = setInterval(() => { val += step; if (val >= end) { val = end; clearInterval(i); } }, 150); }"
                        x-text="val"
                    >0</div>
                    <div class="text-sm text-secondary-500 mt-1">Star Reviews</div>
                </div>
                <div class="text-center">
                    <div
                        class="text-3xl md:text-4xl font-bold text-primary-500"
                        x-data="{ val: 0 }"
                        x-effect="if (shown) { let end = 100; let step = Math.ceil(end / 25); let i = setInterval(() => { val += step; if (val >= end) { val = end; clearInterval(i); } }, 30); }"
                        x-text="val + '%'"
                    >0</div>
                    <div class="text-sm text-secondary-500 mt-1">Gold Coast Local</div>
                </div>
            </div>
        </x-section.wrapper>
    </x-section.section>

    {{-- What we offer --}}
    <x-section.section class="!bg-secondary-50 py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    What we offer
                </x-slot>

                <x-slot name="content">
                    <p>
                        Our team comprises skilled artisans who understand the value of your keepsakes,
                        whether it's artwork, photographs, needlework, or memorabilia.
                        We take pride in our craftsmanship and attention to detail, ensuring that each piece we
                        frame becomes a work of art in itself.
                    </p>

                    <x-section.divider/>

                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:w-3/4 mx-auto gap-4">
                        <x-cards.image-link
                            src="/framing/flinders.webp"
                            title="Custom Framing"
                            alt="Custom Framing: Flinders Range"
                            href="{{ route('custom-framing') }}"
                            loading="lazy"
                        />

                        <x-cards.image-link
                            src="/canvas/tiger-canvas.webp"
                            title="Printing & Canvas"
                            alt="Printing & Canvas: Tiger on a canvas"
                            href="{{ route('printing') }}"
                            loading="lazy"
                        />

                        <x-cards.image-link
                            src="/restorations/reprint-and-frame.webp"
                            title="Restorations & Repairs"
                            alt="Restorations & Repairs: Restored wedding photo"
                            href="{{ route('services.framing.restorations') }}"
                            loading="lazy"
                        />
                    </div>

                    <div class="text-secondary-500 text-center mt-6">
                        and so much more...
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- How it works --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <div class="text-center mb-12">
                <x-heading variant="strikethrough">
                    How it works
                </x-heading>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:w-4/5 mx-auto">
                <div class="text-center px-4">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mx-auto text-xl font-bold">
                        1
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mt-4">Bring your piece in</h3>
                    <p class="text-secondary-500 mt-2 text-sm leading-relaxed">
                        Visit our Labrador store with your artwork, photo, memorabilia, or anything you'd like framed.
                    </p>
                </div>

                <div class="text-center px-4">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mx-auto text-xl font-bold">
                        2
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mt-4">We design your frame</h3>
                    <p class="text-secondary-500 mt-2 text-sm leading-relaxed">
                        Our team works with you to choose the perfect frame, mat, and glass to complement your piece.
                    </p>
                </div>

                <div class="text-center px-4">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mx-auto text-xl font-bold">
                        3
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-800 mt-4">Pick it up, ready to hang</h3>
                    <p class="text-secondary-500 mt-2 text-sm leading-relaxed">
                        We'll let you know when it's done. Come collect your beautifully framed piece and enjoy it for years to come.
                    </p>
                </div>
            </div>
        </x-section.wrapper>
    </x-section.section>

    {{-- Gallery showcase --}}
    <x-section.section class="!bg-secondary-50 py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our Work
                </x-slot>

                <x-slot name="content">
                    <p>
                        From custom frames to canvas prints and restorations — here's a glimpse of what we do.
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-8 items-start">
                        <x-image
                            src="/framing/shadow-box.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Custom shadow box with miniature pram"
                            loading="lazy"
                        />
                        <x-image
                            src="/framing/cat-painting.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Framed cat painting with double mat"
                            loading="lazy"
                        />
                        <x-image
                            src="/canvas/tiger-canvas.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Tiger canvas print"
                            loading="lazy"
                        />
                        <x-image
                            src="/framing/emu-art.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Framed emu artwork"
                            loading="lazy"
                        />
                        <x-image
                            src="/framing/arrowheads.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Framed arrowhead and stone collection"
                            loading="lazy"
                        />
                        <x-image
                            src="/framing/flinders.webp"
                            class="rounded-lg w-full max-h-96 object-contain"
                            alt="Custom framed Flinders Range artwork"
                            loading="lazy"
                        />
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- Our Store --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our Store
                </x-slot>

                <x-slot name="content">
                    <p>
                        Visit us at 122 Brisbane Road, Labrador — our doors have been open since 1997.
                        Come in, have a chat, and see the craftsmanship firsthand.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4 mt-8">
                        <div class="overflow-hidden rounded-lg">
                            <x-image
                                src="/store/gallery.webp"
                                class="object-cover w-full h-64 md:h-80 hover:scale-105 transition-transform duration-500"
                                alt="Framed Just For You restored gallery"
                                loading="lazy"
                            />
                        </div>
                        <div class="overflow-hidden rounded-lg">
                            <x-image
                                src="/store/store-front-new.webp"
                                class="object-cover w-full h-64 md:h-80 hover:scale-105 transition-transform duration-500"
                                alt="Inside Framed Just For You"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- Reviews carousel --}}
    <x-section.section class="py-16">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    What our customers say
                </x-slot>

                <x-slot name="content">
                    <div
                        x-data="{
                            current: 0,
                            reviews: {{ $reviews->count() }},
                            autoplay: null,
                            init() {
                                this.autoplay = setInterval(() => this.next(), 5000);
                            },
                            next() {
                                this.current = (this.current + 1) % this.reviews;
                            },
                            prev() {
                                this.current = (this.current - 1 + this.reviews) % this.reviews;
                            },
                            pause() {
                                clearInterval(this.autoplay);
                            },
                            resume() {
                                this.autoplay = setInterval(() => this.next(), 5000);
                            }
                        }"
                        x-on:mouseenter="pause()"
                        x-on:mouseleave="resume()"
                        class="relative"
                    >
                        <div class="overflow-hidden">
                            <div class="relative min-h-[300px] sm:min-h-[260px]">
                                @foreach($reviews as $index => $review)
                                    <div
                                        x-show="current === {{ $index }}"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-x-4"
                                        x-transition:enter-end="opacity-100 translate-x-0"
                                        x-transition:leave="transition ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-x-0"
                                        x-transition:leave-end="opacity-0 -translate-x-4"
                                        class="absolute inset-0 flex items-center justify-center"
                                    >
                                        <div class="max-w-2xl mx-auto text-center px-8 py-8 bg-secondary-50 rounded-xl">
                                            <div class="flex gap-1 justify-center mb-4">
                                                @foreach(range(1, $review['rating']) as $i)
                                                    <x-icons.star/>
                                                @endforeach
                                            </div>

                                            <blockquote class="text-secondary-600 text-lg leading-relaxed italic">
                                                "{{ $review['text'] }}"
                                            </blockquote>

                                            <div class="mt-4">
                                                <p class="font-semibold text-secondary-800">{{ $review['author_name'] }}</p>
                                                <span class="text-xs text-secondary-400">
                                                    {{ $review['relative_time_description'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Navigation arrows --}}
                        <button
                            x-on:click="prev()"
                            class="absolute left-0 top-1/2 -translate-y-1/2 p-2 text-secondary-400 hover:text-primary-500 transition-colors"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button
                            x-on:click="next()"
                            class="absolute right-0 top-1/2 -translate-y-1/2 p-2 text-secondary-400 hover:text-primary-500 transition-colors"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                        {{-- Dot indicators --}}
                        <div class="flex justify-center gap-2 mt-6">
                            @foreach($reviews as $index => $review)
                                <button
                                    x-on:click="current = {{ $index }}"
                                    :class="current === {{ $index }} ? 'bg-primary-500' : 'bg-secondary-300'"
                                    class="w-2.5 h-2.5 rounded-full transition-colors"
                                ></button>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex justify-center mt-6">
                        <x-links.other-secondary
                            href="https://www.google.com/search?q=framed+just+for+you&rlz=1C1VDKB_enAU1092AU1092&oq=framed+just+for+you&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMg0IARAuGK8BGMcBGIAEMgYIAhAjGCcyBwgDEAAYgAQyCAgEEAAYFhgeMgYIBRBFGEEyBggGEEUYPDIGCAcQRRg80gEIMjY2M2owajeoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x6b91104badf99849:0x5081ce9cf421fff2,1,,,,"
                        >
                            View All Reviews
                        </x-links.other-secondary>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    {{-- Final CTA --}}
    <x-section.section class="!bg-secondary-50 py-16">
        <x-section.wrapper>
            <div class="text-center max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-secondary-800">Let us turn your idea into reality</h3>
                <p class="text-secondary-500 mt-2">
                    We have a passion for framing and can't wait to work with you to build something amazing.
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <x-links.primary href="{{ route('contact') }}">
                        Contact Us
                    </x-links.primary>
                    <x-links.primary href="{{ route('custom-framing') }}">
                        Custom Framing
                    </x-links.primary>
                    <x-links.primary href="{{ route('printing') }}">
                        Printing
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
