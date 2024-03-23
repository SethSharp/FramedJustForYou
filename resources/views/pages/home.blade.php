<x-layouts.app>
    @section("header")
        <div class="relative z-20">
            <x-local-image
                src="/store/store-front-right.webp"
                class="object-cover h-[500px] w-full"
                alt="Store Front Image"
            />
            <div class="absolute inset-0 bg-black/75">
                <div
                    class="flex justify-end pt- 6 md:pt-12 pr-12 md:pr-24 text-white text-md md:text-xl uppercase py-4 md:py-0">
                    Call us at <a href="tel:0412068330"
                                  class="pl-1 text-primary-400"> {{ config('framed.contact.telephone')  }} </a>
                </div>

                <div class="md:flex px-6 md:px-16">
                    <div class="w-full md:w-1/2">
                        <x-headings.title-overline>
                            Your Custom Framers
                        </x-headings.title-overline>

                        <h1 class="text-3xl sm:text-5xl md:text-6xl text-white mt-2"> Framed Just <br> For You</h1>
                    </div>

                    <div class="w-full md:w-1/2">
                        <x-local-image
                            src="/store/store-front-right.webp"
                            class="object-cover mt-[25px] md:mt-[100px] h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-4 border-secondary-100 rounded"
                            alt="Framed Just For You Team Photo"
                        />
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <x-section.section class="mt-[50px] !bg-secondary-50">
        <x-section.wrapper>
            <x-cards.image-content-right>
                <x-slot name="title">
                    Why Us?
                </x-slot>

                <x-slot name="image">
                    <x-image
                        src="store/store-front-new.webp"
                        class="object-cover h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-4 border-secondary-100 rounded"
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
                            Our team is comprised of skilled artisans who understand the value of your keepsakes,
                            whether it's artwork, photographs, needlework, or memorabilia.
                            We take pride in our craftsmanship and attention to detail, ensuring that each piece we
                            frame becomes a work of art in itself.
                        </p>

                        <x-section.divider/>

                        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:w-3/4 mx-auto gap-4">
                            <x-cards.arch
                                src="framing/flinders.webp"
                                title="Custom Framing"
                                alt="Custom Framing: Flinders Range"
                                href="{{ route('custom-framing') }}"
                            />

                            <x-cards.arch
                                src="canvas/tiger-canvas.webp"
                                title="Printing & Canvas"
                                alt="Printing & Canvas: Tiger on a canvas"
                                href="{{ route('printing') }}"
                            />

                            <x-cards.arch
                                src="restorations/reprint-and-frame.webp"
                                title="Restorations & Repairs"
                                alt="Restorations & Repairs: Restored wedding photo"
                                href="{{ route('services.framing.restorations') }}"
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
                            src="store/front.png"
                            class="object-cover h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-4 border-secondary-100 rounded"
                            alt="Framed Just For You Team Photo"
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
    </x-section.section>

    <x-section.section class="!bg-secondary-200">
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
                            src="store/gallery.webp"
                            class="mx-auto"
                            alt="Framed Just For You Restored Gallery"
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

                    <div class="bg-secondary-50 rounded">
                        <div class="lg:w-3/4 mx-auto p-2 md:p-8">
                            <h4 class="text-xl text-secondary-700"> Let us turn your idea into reality!</h4>

                            <p>
                                We have a passion for framing and can't wait to work with you to build something amazing.
                            </p>

                            <div class="mt-4 gap-4 grid sm:grid-cols-3">
                                <x-links.secondary href="{{ route('contact')  }}">
                                    Contact Us
                                </x-links.secondary>
                                <x-links.primary href="{{ route('contact')  }}">
                                    Custom Framing
                                </x-links.primary>
                                <x-links.primary href="{{ route('contact')  }}">
                                    Printing
                                </x-links.primary>
                            </div>

                            <x-section.divider />

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
