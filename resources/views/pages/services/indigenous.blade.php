<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Indigenous Art
            </x-slot>

            <x-slot name="content">
               <x-image
                    src="Indigenous/canvas.webp"
                    additionalClass="object-cover h-[500px] w-full"
                    alt="Indigenous Artwork on canvas"
                />

                <div class="md:flex px-6 md:px-16 mt-[50px]">
                    <div class="w-full md:w-1/2">
                        <p class="bg-secondary-100 mt-14 p-6 leading-loose">
                            Immerse yourself in the rich cultural tapestry of Indigenous Australian art, a captivating expression of the world's oldest living culture.
                            Drawing inspiration from the ancient Dreamtime stories and the diverse landscapes of the continent. For every piece we find its perfect match, a
                            frame meticulously chosen to enhance its beauty. Visit us to see how our love for framing transforms pictures into timeless masterpieces.
                        </p>
                    </div>

                    <div class="w-full md:w-1/2">
                        <div class="mx-auto w-3/4">
                            <x-image
                                src="Indigenous/indigenous.webp"
                                additionalClass="object-cover h-[400px] w-1/2 mx-auto hover:scale-105 transition duration-1000 w-full border-4 border-secondary-100 rounded"
                                alt="Framed Just For You Team Photo"
                            />
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
