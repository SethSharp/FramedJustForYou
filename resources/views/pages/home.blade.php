<x-layouts.app>
    <x-slot name="header">
        <div class="relative">
            <div class="w-full">
                <x-image src="store/framing-bench.png" additionalClass="object-cover h-[400px] w-full" alt="TODO"/>
            </div>

            <div class="absolute inset-0 z-20">
                <div class="bg-secondary-50 w-3/4 mx-auto mt-[150px] p-4 rounded">
                    <x-section.wrapper>
                        <h1 class="text-6xl tracking-tighter font-bold">
                            Framed Just For You
                        </h1>
                    </x-section.wrapper>

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
                                    At Framed Just For You, we are more than just a framing business; we are a local institution with a passion for preserving your cherished memories in the most beautiful and meaningful way. With over three decades of experience, we have been the go-to destination for custom framing on the Gold Coast.
                                </x-cards.left>
                            </x-slot>
                        </x-section.content>
                    </x-section.wrapper>
                </div>
            </div>
        </div>
    </x-slot>

    <div>
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
