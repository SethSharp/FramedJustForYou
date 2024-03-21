@section('title', 'Handcrafted - ' . config('app.name'))
@section('description', '')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Handcrafted
            </x-slot>

            <x-slot name="content">
                <x-cards.image-content-left>
                    <x-slot name="image">
                        <x-image
                            src="handcrafted/pressed.webp"
                            alt="Handcrafted piece of a person holding an umbrella with a light post & a couple in the background"
                            class="mx-auto"
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
</x-layouts.app>
