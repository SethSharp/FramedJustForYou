<x-layouts.app>
    <x-slot name="header">
        <div class="relative">
            <div class="w-full">
                <x-image src="store/framing-bench.png" additionalClass="object-cover h-[400px] w-full" alt=""/>
            </div>

            <div class="absolute inset-0 z-20">
                <div class="bg-white w-3/4 mx-auto mt-[150px] p-4 rounded">
                    <x-section.wrapper>
                        <h1 class="text-6xl tracking-tight font-extrabold">
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
                                    Small piece of the company
                                </x-cards.right>

                                <x-cards.left>
                                    Popular services with some big name clients
                                </x-cards.left>
                            </x-slot>
                        </x-section.content>
                    </x-section.wrapper>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="">
        <x-section.wrapper>
            <div>
                <h1> What we offer </h1>
                <p> What we offer allows your frame to be transformed from 0 to 1000 & items to transform
                    your
                    name.
                    Lets
                    see what we offer to allow this </p>

                <div class="bg-secondary_2-200 p-6">
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
            <div class="mx-auto justify-center py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($reviews as $review)
                        <x-cards.google-review :review="$review" />
                    @endforeach
                </div>

                <div class="flex justify-center mt-4">
                    <a href="#" class="p-2 border-2 border-secondary_2-400 text-secondary_2-400 hover:border-transparent hover:text-secondary_2-600 hover:bg-secondary_2-400 transition duration-300">
                        View All
                    </a>
                </div>
            </div>
        </x-section.wrapper>
    </div>
</x-layouts.app>
