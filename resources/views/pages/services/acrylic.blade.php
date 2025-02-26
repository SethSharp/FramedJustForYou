@section('title', 'Acrylic - ' . config('app.name'))
@section('description', 'Acrylic is a very interesting form of framing and presentation of precious items. We have framed a range of acrylic cases of all shapes & sizes.')

@php
    $breadcrumbs = [
        [
            'name' => 'Custom Framing',
            'href' => route('custom-framing')
        ],
        [
            'name' => 'Acrylic',
            'href' => route('services.framing.acrylic')
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.page :breadcrumbs="$breadcrumbs">
        <x-section.section>
            <x-section.wrapper>
                <x-section.content>
                    <x-slot name="title">
                        Acrylic
                    </x-slot>

                    <x-slot name="content">
                        <p class="sm:mx-8">
                            Acrylic casing offers a stunning way to showcase your cherished items. At Framed Just For
                            You,
                            our acrylic cases are designed to accommodate a wide range of objects, from golf balls to
                            football
                            boots, and from jerseys to guitars!
                        </p>

                        <div class="grid sm:grid-cols-2 sm:w-3/4 mx-auto gap-4">
                            <x-image
                                src="acrylic/golf-ball-display.webp"
                                alt="Golf Ball display in example home space"
                                class="h-full object-cover"
                            />

                            <x-image
                                src="acrylic/football.webp"
                                alt="Football in case"
                                class="h-full object-cover"
                            />

                            <x-image
                                src="acrylic/boot.webp"
                                alt="Boot in case"
                                class="h-full object-cover"
                            />

                            <x-image
                                src="acrylic/shovel.webp"
                                alt="Golden Shovel in case"
                                class="h-full object-cover"
                            />
                        </div>

                        <p class="sm:mx-8">
                            With our versatile acrylic cases, you have the flexibility to choose between wall mounting
                            or
                            displaying on a flat surface, depending on the nature of your item. Ready to elevate your
                            displays? Visit our showroom today for personalized design consultations and a tailored
                            quote.
                        </p>
                    </x-slot>
                </x-section.content>
            </x-section.wrapper>
        </x-section.section>
    </x-section.page>
</x-layouts.app>
