<x-layouts.app>
    @section("header")
        <div class="relative z-20">
            <x-image src="store/framing-bench.png" additionalClass="object-cover h-[500px] w-full" alt="TODO"/>
            <div class="absolute inset-0 bg-black/75">
                <div class="flex justify-end pt-6 md:pt-12 pr-12 md:pr-24 text-white text-md md:text-xl uppercase py-4 md:py-0">
                    Call us at <a href="tel:0412068330" class="pl-1 text-primary-400"> 07 5563 9799 </a>
                </div>

                <div class="md:flex px-6 md:px-16">
                    <div class="w-full md:w-1/2">
                        <x-title title="Your Custom Framers" />

                        <h1 class="text-3xl sm:text-5xl md:text-6xl text-white mt-2"> Framed Just <br> For You</h1>
                    </div>

                    <div class="w-full md:w-1/2">
                        <x-image src="store/framing-bench.png" additionalClass="object-cover mt-[25px] md:mt-[100px] h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-2 border-secondary-400 rounded" alt="Framed Just For You Team Photo"/>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <x-section.section class="mt-[100px] sm:mt-[100px] !bg-secondary-200">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Who are we
                </x-slot>

                <x-slot name="content">
                    <x-cards.right>
                        At Framed Just For You, we are more than just a framing business; we are a local institution with a passion for preserving your cherished memories in the most beautiful and meaningful way. With over three decades of experience, we have been the go-to destination for custom framing on the Gold Coast.
                    </x-cards.right>

                    <x-cards.left>
                        Our team is comprised of skilled artisans who understand the value of your keepsakes, whether it's artwork, photographs, needlework, or memorabilia. We take pride in our craftsmanship and attention to detail, ensuring that each piece we frame becomes a work of art in itself. As an Australian-based, family-owned and operated business, we are deeply rooted in our community, and our commitment to quality and customer satisfaction has remained unwavering since day one.
                    </x-cards.left>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section class="!bg-secondary-100">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    What we offer
                </x-slot>

                <x-slot name="content">
                    <p>
                        Our team is comprised of skilled artisans who understand the value of your keepsakes, whether it's artwork, photographs, needlework, or memorabilia. We take pride in our craftsmanship and attention to detail, ensuring that each piece we frame becomes a work of art in itself. As an Australian-based, family-owned and operated business, we are deeply rooted in our community, and our commitment to quality and customer satisfaction has remained unwavering since day one.
                    </p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <x-cards.arch
                            image="framing/flinders.webp"
                            title="Custom Framing"
                            href="{{ route('services.framing') }}"
                        />

                        <x-cards.arch
                            image="printing/printer.webp"
                            title="Printing Services"
                            href="{{ route('services.printing') }}"
                        />

                        {{--   TODO: Canvases and updating the images here   --}}

                        <x-cards.arch
                            image="matboards/matboard-cutter.webp"
                            title="Computerised Matboard Cutting"
                            href="{{ route('services.other.matboard-cutting') }}"
                        />

                        <x-cards.arch
                            image="restorations/reprint-and-frame.webp"
                            title="Restorations and Repairs"
                            href="{{ route('services.framing.restorations') }}"
                        />
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section class="!bg-secondary-200">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our New Gallery!
                </x-slot>

                <x-slot name="content">
                    We have recently renovated and modernised our gallery. This is where we hold some
                    absolutely
                    magnificent
                    frames, allowing you to....
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>

    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our Service
                </x-slot>

                <x-slot name="content">
                    <div class="mx-auto w-4/5 justify-center py-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach($reviews as $review)
                                <x-cards.google-review :review="$review" />
                            @endforeach
                        </div>

                        <div class="flex justify-center mt-4">
                            <a href="#" class="p-2 border-2 rounded border-secondary-400 text-secondary-500 hover:border-transparent hover:text-secondary-600 hover:bg-secondary-400 transition duration-300">
                                View All
                            </a>
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
