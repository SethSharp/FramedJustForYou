@section('title', 'Medals & Memorabilia - ' . config('app.name'))
@section('description', '')

@php
    $links = [
        [
            'href' => '#collectables',
            'title' => 'Collectables'
        ],
        [
            'href' => '#medals',
            'title' => 'Medals'
        ],
        [
            'href' => '#faq',
            'title' => 'Sports & Memorabilia'
        ]
    ];
@endphp

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Medals & Memorabilia
            </x-slot>

            <x-slot name="content">
                <div class="md:flex gap-4">
                    <div class="md:w-3/5">
                        We understand the unique value of your memorabilia, and that's why we take great care in handling and displaying it appropriately.
                        Our conservation framing techniques ensure that your cherished pieces are framed in a manner that allows for easy removal while preserving
                        their original condition. Your memorabilia remains both well-protected and accessible when you choose our services.
                    </div>
                    <div class="md:w-2/5 px-4 flex justify-center">
                        <x-section.whats-on-this-page :links="$links" />
                    </div>
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
