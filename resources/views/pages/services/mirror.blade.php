@section('title', 'Mirrors - ' . config('app.name'))
@section('description', 'Mirror framing can really transform your personal space where you have a mirror.')

@php
    $breadcrumbs = [
        [
            'name' => 'Custom Framing',
            'href' => route('custom-framing')
        ],
        [
            'name' => 'Mirror',
            'href' => route('services.framing.mirror')
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.page :breadcrumbs="$breadcrumbs">
        <x-section.section>
            <x-section.wrapper>
                <x-section.content>
                    <x-slot name="title">
                        Mirror
                    </x-slot>

                    <x-slot name="content">
                        <x-cards.image-content-left>
                            <x-slot name="image">
                                <x-image
                                    src="mirror/frame-bethany.webp"
                                    alt="A very large framed mirror"
                                    class="h-96 mx-auto"
                                />
                            </x-slot>

                            <x-slot name="content">
                                Framing mirrors is something that can really transform your personal space and
                                reflect your character. Mirrors can be so bland so why not frame one? We can frame all
                                sizes
                                of mirrors
                                you have and can even order in one to your sze requirements - meaning we can provide a
                                upfront quote of
                                the mirror as well!
                            </x-slot>
                        </x-cards.image-content-left>
                    </x-slot>
                </x-section.content>
            </x-section.wrapper>
        </x-section.section>
    </x-section.page>
</x-layouts.app>
