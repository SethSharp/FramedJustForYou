@section('title', 'Handcrafted - ' . config('app.name'))
@section('description', 'Handcrafted artwork is always something special for us, as we know a lot of work has been put into them. Which ensures us to be careful as well!')

@php
    $breadcrumbs = [
        [
            'name' => 'Custom Framing',
            'href' => route('custom-framing')
        ],
        [
            'name' => 'Handcrafted',
            'href' => route('services.framing.handcrafted')
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.page :breadcrumbs="$breadcrumbs">
        <x-section.section>
            <x-section.wrapper>
                <x-section.content>
                    <x-slot name="title">
                        Handcrafted
                    </x-slot>

                    <x-slot name="content">
                        <x-cards.image-content-left>
                            <x-slot name="image">
                                <x-local-image
                                    src="/handcrafted/pressed.webp"
                                    alt="Handcrafted piece of a person holding an umbrella with a light post & a couple in the background"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Explore the enchanting world of handcrafted art that celebrates the
                                timeless tradition of
                                <b>cross-stitched, beaded art, tapestries, and needlework</b>. Immerse
                                yourself in the intricate details and delicate stitches that bring each
                                piece to life, showcasing the dedication and skill of the artisans
                                behind these creations. From the vibrant hues of meticulously
                                cross-stitched designs to the shimmering allure of beaded masterpieces,
                                our handcrafted art collection is a testament to the beauty of
                                traditional craftsmanship.
                            </x-slot>
                        </x-cards.image-content-left>
                    </x-slot>
                </x-section.content>
            </x-section.wrapper>
        </x-section.section>
    </x-section.page>
</x-layouts.app>
