@section('title', 'Prints, Posters & Photos - ' . config('app.name'))
@section('description', '')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Prints, Posters & Photos
            </x-slot>

            <x-slot name="content">
                Transform anything on paper into a captivating masterpiece with our expert
                framing services. Whether it's your cherished family photos capturing
                precious moments or posters from your favorite movies that hold sentimental
                value, we specialize in helping you select the perfect frame. Our commitment
                goes beyond mere framing; we understand the significance of each piece and
                tailor our recommendations to complement the essence of your unique items.
                Entrust us with your memories, and let our craftsmanship elevate the visual
                impact of your paper treasures, creating timeless displays that tell your
                story with elegance and flair.

                <div class="grid grid-cols-1 sm:grid-cols-3 w-3/4 mx-auto gap-6 my-8">
                    <x-image
                        src="prints-photos/picture-2.webp"
                        alt="Print of a mother & child in the safari"
                        class="h-full object-cover object-center"
                    />
                    <x-image
                        src="prints-photos/picture-1.webp"
                        alt="Print of a turtle surrounded by sea grass"
                        class="h-full object-cover object-center"
                    />
                    <x-image
                        src="prints-photos/poster-1.webp"
                        alt="A Rocky Horror Picture Show Poster signed by the cast"
                        class="h-full object-cover object-center"
                    />
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
