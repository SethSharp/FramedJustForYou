@php
    $customLinks_1 = [
        [
            'href' => route('new.services.framing.acrylic'),
            'name' => 'Acrylic',
            'active' => request()->route()->getName() === 'new.services.framing.acrylic'
        ],
        [
            'href' => route('services.framing.australian'),
            'name' => 'Australian Made Framing Kits',
            'active' => request()->route()->getName() === 'services.framing.australian'
        ],
        [
            'href' => route('services.framing.canvases'),
            'name' => 'Canvases',
            'active' => request()->route()->getName() === 'services.framing.canvases'
        ],
        [
            'href' => route('services.framing.indigenous-art'),
            'name' => 'Indigenous Art',
            'active' => request()->route()->getName() === 'services.framing.indigenous-art'
        ],
        [
            'href' => route('services.framing.jigsaws'),
            'name' => 'Jigsaws',
            'active' => request()->route()->getName() === 'services.framing.jigsaws'
        ],
    ];

    $customLinks_2 = [
        [
            'href' => route('services.framing.medals-memorabilia'),
            'name' => 'Medals and Memorabilia',
            'active' => request()->route()->getName() === 'services.framing.medals-memorabilia'
        ],
        [
            'href' => route('services.framing.mirror'),
            'name' => 'Mirror',
            'active' => request()->route()->getName() === 'services.framing.mirror'
        ],
        [
            'href' => route('services.framing.original-artwork'),
            'name' => 'Original Artwork',
            'active' => request()->route()->getName() === 'services.framing.original-artwork'
        ],
        [
            'href' => route('services.framing.prints-posters-and-photos'),
            'name' => 'Prints, Posters, and Photos',
            'active' => request()->route()->getName() === 'services.framing.prints-posters-and-photos'
        ],
        [
            'href' => route('services.framing.hand-crafted'),
            'name' => 'Handcrafted',
            'active' => request()->route()->getName() === 'services.framing.hand-crafted'
        ],
    ];

    $otherLinks = [
        [
            'href' => route('services.other.glass-cutting'),
            'name' => 'Glass Cutting',
            'active' => request()->route()->getName() === 'services.other.glass-cutting'
        ],
        [
            'href' => route('services.other.matboard-cutting'),
            'name' => 'Matboard Cutting',
            'active' => request()->route()->getName() === 'services.other.matboard-cutting'
        ],
        [
            'href' => route('services.other.ready-made'),
            'name' => 'Ready Made',
            'active' => request()->route()->getName() === 'services.other.ready-made'
        ],
        [
            'href' => route('services.other.framing-supplies'),
            'name' => 'Framing Supplies',
            'active' => request()->route()->getName() === 'services.other.framing-supplies'
        ]
    ];
@endphp

<div
    x-data="{open: false}"
>
    <div x-on:click="open = !open" x-transition class="cursor-pointer text-white">
        <div class="flex text-2xl md:text-xl mt-1.5">
            <x-links.underline>
                Services
            </x-links.underline>

            <div x-bind:class="{ 'rotate-180': open }" class=" ml-0.5 transform duration-300">
                <x-icons.chevron-down/>
            </div>
        </div>
    </div>

    <div class="inset-0 absolute z-50 sm:flex" x-show="open" x-on:click="open = false">
        <div class="mt-16 w-4/5 mx-auto shadow-2xl">
            <div
                class="bg-secondary-50 rounded-xl shadow-xl px-4 mx-auto mt-2 py-6 md:flex hidden max-w-7xl w-full"
            >
                <div class="flex w-full">
                    <div class="grid grid-cols-3 gap-y-4 w-full border-gray-200">
                        <div>
                            <h3 class="text-xl"> Custom Framing </h3>

                            @foreach ($customLinks_1 as $link)
                                <x-links.mega-menu-link href="{{$link['href']}}" active="{{$link['active']}}">
                                    {{ $link['name'] }}
                                </x-links.mega-menu-link>
                            @endforeach
                        </div>

                        <div>
                            @foreach ($customLinks_2 as $link)
                                <x-links.mega-menu-link href="{{$link['href']}}" active="{{$link['active']}}">
                                    {{ $link['name'] }}
                                </x-links.mega-menu-link>
                            @endforeach
                        </div>

                        <div>
                            <h3 class="text-xl"> Other </h3>

                            @foreach ($otherLinks as $link)
                                <x-links.mega-menu-link href="{{$link['href']}}" active="{{$link['active']}}">
                                    {{ $link['name'] }}
                                </x-links.mega-menu-link>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
