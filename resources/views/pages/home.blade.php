<x-layouts.app>
    @section("header")
        <div class="relative z-20">
            <x-image
                src="/store/store-front-right.webp"
                class="object-cover min-h-[300px] sm:min-h-[400px] md:min-h-[500px] lg:min-h-[600px] xl:min-h-[700px] w-full object-bottom xl:object-center"
                alt="Store Front Image"
            />
            <div class="absolute inset-0 bg-black/75">
                <div
                    class="flex justify-end md:pt-12 pr-12 md:pr-24 text-white text-md md:text-xl uppercase py-4 md:py-0">
                    Call us at
                    <a
                        href="tel:0412068330"
                        class="pl-2 text-primary-400">
                        {{ config('framed.contact.telephone') }}
                    </a>
                </div>

                <div class="md:flex px-6 md:px-16">
                    <div class="w-full md:w-1/2">
                        <x-headings.title-overline>
                            Your Custom Framers
                        </x-headings.title-overline>

                        <h1 class="text-3xl sm:text-5xl md:text-6xl text-white mt-2"> Framed Just <br> For You</h1>
                    </div>

{{--                    <div class="w-full md:w-1/2 hidden md:block">--}}
{{--                        <x-image--}}
{{--                            src="/store/store-front-right.webp"--}}
{{--                            class="object-cover mt-[25px] md:mt-[100px] h-[200px] md:h-[350px] w-full border-4 border-secondary-100 rounded"--}}
{{--                            alt="Framed Just For You Team Photo"--}}
{{--                        />--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    @endsection

{{--    <x-contact.open-times />--}}

    <x-section.section class="mt-[50px] !bg-secondary-50">
        <x-section.wrapper>
            <x-cards.image-content-right>
                <x-slot name="title">
                    Why Us?
                </x-slot>

                <x-slot name="image">
                    <x-image
                        src="/store/store-front-new.webp"
                        class="object-cover w-full border-4 border-secondary-100 rounded"
                        alt="Framed Just For You Team Photo"
                    />
                </x-slot>

                <x-slot name="content">
                    At Framed Just For You, we are more than just a framing business; we are a local institution
                    with a passion for preserving your
                    cherished memories in the most beautiful and meaningful way. With over three decades of
                    experience, we have been the go-to destination
                    for custom framing on the Gold Coast.
                </x-slot>
            </x-cards.image-content-right>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section class="!bg-secondary-100 mt-12">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    What we offer
                </x-slot>

                <x-slot name="content">
                    <div>
                        <p>
                            Our team comprises skilled artisans who understand the value of your keepsakes,
                            whether it's artwork, photographs, needlework, or memorabilia.
                            We take pride in our craftsmanship and attention to detail, ensuring that each piece we
                            frame becomes a work of art in itself.
                        </p>

                        <x-section.divider/>

                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:w-3/4 mx-auto gap-4">
                            <x-cards.arch
                                src="/framing/flinders.webp"
                                title="Custom Framing"
                                alt="Custom Framing: Flinders Range"
                                href="{{ route('custom-framing') }}"
                                loading="lazy"
                            />

                            <x-cards.arch
                                src="/canvas/tiger-canvas.webp"
                                title="Printing & Canvas"
                                alt="Printing & Canvas: Tiger on a canvas"
                                href="{{ route('printing') }}"
                                loading="lazy"
                            />

                            <x-cards.arch
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
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section class="mt-[50px] !bg-secondary-50">
        <x-section.wrapper>
            <div class="lg:relative">
                <x-cards.image-content-left>
                    <x-slot name="image">
                        <x-image
                            src="/store/front.png"
                            class="object-cover w-full border-4 border-secondary-100 rounded"
                            alt="Inside Framed Just For You"
                            loading="lazy"
                        />
                    </x-slot>

                    <x-slot name="content">
                        In our ever-evolving journey, Framed Just For You continues to embrace innovation and
                        creativity in the world of custom framing.
                        We understand that art and design are constantly evolving, and we strive to stay at the
                        forefront of industry trends.
                    </x-slot>
                </x-cards.image-content-left>
            </div>
        </x-section.wrapper>
        <!--        <x-section.wrapper>
                    <div class="text-center">
                        <h2 class="font-bold text-3xl text-black">
                            Relay For Life: 2024
                        </h2>

                        <div class="lg:w-1/2 mx-auto text-secondary-500">
                            <div class="py-4">
                                <p>
                                    Framed Just For You is excited to participate in Relay For Life this year! As a team, we've
                                    all been impacted by cancer in some way, and we're coming together to honor our loved ones
                                    who have been affected. This event is a powerful way to remember those we've lost, support
                                    those who are fighting, and celebrate those who have overcome cancer. Your support would
                                    mean the world to us! Join us in the fight against cancer!
                                </p>

                                <p class="font-semibold">
                                    To sponsor our team this year you can follow this QR code
                                </p>
                            </div>

                            <x-image
                                src="/relay-2024-qr-code.jpg"
                                alt="QR code for our Relay for Life team in 2024"
                                class="mx-auto mb-6 size-44"
                            />

                            <a href="https://www.relayforlife.org.au/fundraisers/framedjustforyou"
                               class="bg-yellow-500 rounded px-2 py-4 text-[#0f1e64] font-semibold hover:text-white hover:bg-purple-600 transition">
                                or click here
                            </a>
                        </div>
                    </div>
                </x-section.wrapper>-->
    </x-section.section>

    <x-section.section class="!bg-secondary-100">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our New Gallery!
                </x-slot>

                <x-slot name="content">
                    One of our most recent projects was restoring our gallery. This is the centerpiece of our store
                    showing off some awesome frames - these are also available for sale!

                    <div class="mx-auto mt-12 w-3/4 sm:w-1/2">
                        <x-image
                            src="/store/gallery.webp"
                            class="mx-auto"
                            alt="Framed Just For You Restored Gallery"
                            loading="lazy"
                        />
                    </div>

                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section class="!bg-white">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    What our customers say
                </x-slot>

                <x-slot name="content">
                    <div class="justify-center py-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($reviews as $review)
                                <x-cards.google-review :review="$review"/>
                            @endforeach
                        </div>

                        <div class="flex justify-center mt-4">
                            <x-links.other-secondary
                                href="https://www.google.com/search?q=framed+just+for+you&rlz=1C1VDKB_enAU1092AU1092&oq=framed+just+for+you&gs_lcrp=EgZjaHJvbWUqDAgAECMYJxiABBiKBTIMCAAQIxgnGIAEGIoFMg0IARAuGK8BGMcBGIAEMgYIAhAjGCcyBwgDEAAYgAQyCAgEEAAYFhgeMgYIBRBFGEEyBggGEEUYPDIGCAcQRRg80gEIMjY2M2owajeoAgCwAgA&sourceid=chrome&ie=UTF-8#lrd=0x6b91104badf99849:0x5081ce9cf421fff2,1,,,,"
                            >
                                View All
                            </x-links.other-secondary>
                        </div>
                    </div>

                    <x-section.divider/>

                    <div>
                        <div class="lg:w-3/4 mx-auto p-2 md:p-8">
                            <h4 class="text-xl text-secondary-700"> Let us turn your idea into reality!</h4>

                            <p>
                                We have a passion for framing and can't wait to work with you to build something
                                amazing.
                            </p>

                            <div class="mt-4 gap-4 grid sm:grid-cols-3">
                                <x-links.secondary href="{{ route('contact')  }}">
                                    Contact Us
                                </x-links.secondary>
                                <x-links.primary href="{{ route('custom-framing')  }}">
                                    Custom Framing
                                </x-links.primary>
                                <x-links.primary href="{{ route('printing')  }}">
                                    Printing
                                </x-links.primary>
                            </div>

                            <x-section.divider/>

                            <div class="gap-4 sm:w-3/4 md:w-1/2 mx-auto grid sm:grid-cols-2">
                                <x-links.other-secondary href="{{ route('about')  }}">
                                    Meet the team
                                </x-links.other-secondary>
                                <x-links.other-secondary href="{{ route('services.other')  }}">
                                    Other Services
                                </x-links.other-secondary>
                            </div>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
