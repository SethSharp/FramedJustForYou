@section('title', 'Indigenous Art - ' . config('app.name'))
@section('description', 'Indigenous Art is a precious piece of art, we understand this and ensure your pieces are treated with care.')

@php
    $breadcrumbs = [
        [
            'name' => 'Custom Framing',
            'href' => route('custom-framing')
        ],
        [
            'name' => 'Indigenous Art',
            'href' => route('services.framing.indigenous')
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.page :breadcrumbs="$breadcrumbs">
        <x-section.section>
            <x-section.wrapper>
                <x-section.content>
                    <x-slot name="title">
                        Indigenous Art
                    </x-slot>

                    <x-slot name="content">
                        <x-cards.image-content-right>
                            <x-slot name="image">
                                <x-image
                                    src="Indigenous/canvas.webp"
                                    alt="Indigenous Canvas"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Immerse yourself in the rich cultural tapestry of Indigenous Australian art, a
                                captivating
                                expression of the world's oldest living culture.
                                Drawing inspiration from the ancient Dreamtime stories and the diverse landscapes of the
                                continent. For every piece we find its perfect match, a
                                frame meticulously chosen to enhance its beauty. Visit us to see how our love for
                                framing
                                transforms pictures into timeless masterpieces.
                            </x-slot>
                        </x-cards.image-content-right>
                    </x-slot>
                </x-section.content>
            </x-section.wrapper>
        </x-section.section>
    </x-section.page>
</x-layouts.app>
