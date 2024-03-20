@section('title', 'Jigsaws - ' . config('app.name'))
@section('description', 'Jigsaw framing requires a special process and we have a effective of steps to ensure its longevity.')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Indigenous Art
            </x-slot>

            <x-slot name="content">
                <x-cards.image-content-right>
                    <x-slot name="image">
                        <x-image
                            src="Indigenous/indigenous.webp"
                            src="Indigenous/canvas.webp"
                            alt="Framed Just For You Team Photo"
                        />
                    </x-slot>

                    <x-slot name="content">
                        Immerse yourself in the rich cultural tapestry of Indigenous Australian art, a captivating
                        expression of the world's oldest living culture.
                        Drawing inspiration from the ancient Dreamtime stories and the diverse landscapes of the
                        continent. For every piece we find its perfect match, a
                        frame meticulously chosen to enhance its beauty. Visit us to see how our love for framing
                        transforms pictures into timeless masterpieces.
                    </x-slot>
                </x-cards.image-content-right>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
