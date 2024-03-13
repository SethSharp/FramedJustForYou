<x-layouts.app>
    <x-slot name="header">
        <div class="relative z-20">
            <x-image src="store/framing-bench.png" additionalClass="object-cover h-[500px] w-full" alt="TODO"/>
            <div class="absolute inset-0 bg-black/75">
                <div class="flex justify-end pt-6 md:pt-12 pr-12 md:pr-24 text-white text-md md:text-xl uppercase py-4 md:py-0">
                    Call us at <a href="tel:0412068330" class="pl-1 text-primary-400"> 07 5563 9799 </a>
                </div>

                <div class="md:flex px-6 md:px-16">
                    <div class="w-full md:w-1/2">
                        <div class="w-32 h-1 mb-6 bg-primary-500"></div>
                        <div class="text-primary-500 text-lg md:text-2xl"> Custom Picture Framers</div>

                        <h1 class="text-3xl sm:text-5xl md:text-6xl text-white"> Framed Just <br> For You</h1>
                    </div>

                    <div class="w-full md:w-1/2">
                        <x-image src="store/framing-bench.png" additionalClass="object-cover mt-[25px] md:mt-[100px] h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-2 border-secondary-400 rounded" alt="Framed Just For You Team Photo"/>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="mt-[100px] sm:mt-[100px]">
        <x-section.wrapper>
            <div>
                <h1> What we offer </h1>
                <p>
                    Our team is comprised of skilled artisans who understand the value of your keepsakes, whether it's artwork, photographs, needlework, or memorabilia. We take pride in our craftsmanship and attention to detail, ensuring that each piece we frame becomes a work of art in itself. As an Australian-based, family-owned and operated business, we are deeply rooted in our community, and our commitment to quality and customer satisfaction has remained unwavering since day one.
                </p>

                <div class="bg-secondary-200 p-6">
                    <div class="w-3/4 mx-auto">
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
                    </div>
                </div>
            </div>
        </x-section.wrapper>

        <x-section.wrapper>
            <div>
                <h1>Our New Gallery!</h1>
                <p> We have recently renovated and modernised our gallery. This is where we hold some
                    absolutely
                    magnificent
                    frames, allowing you to.... </p>
            </div>
        </x-section.wrapper>

        <x-section.wrapper>
            <div class="mx-auto w-4/5 justify-center py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($reviews as $review)
                        <x-cards.google-review :review="$review" />
                    @endforeach
                </div>

                <div class="flex justify-center mt-4">
                    <a href="#" class="p-2 border-2 rounded border-secondary-400 text-secondary-400 hover:border-transparent hover:text-secondary-600 hover:bg-secondary-400 transition duration-300">
                        View All
                    </a>
                </div>
            </div>
        </x-section.wrapper>
    </div>
</x-layouts.app>
