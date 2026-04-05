@php
    $customLinks_1 = [
        [
            'href' => route('services.framing.acrylic'),
            'name' => 'Acrylic',
            'active' => request()->route()?->getName() === 'services.framing.acrylic'
        ],
        [
            'href' => route('services.framing.canvas'),
            'name' => 'Canvas',
            'active' => request()->route()?->getName() === 'services.framing.canvas'
        ],
        [
            'href' => route('services.framing.indigenous'),
            'name' => 'Indigenous Art',
            'active' => request()->route()?->getName() === 'services.framing.indigenous'
        ],
        [
            'href' => route('services.framing.jigsaw'),
            'name' => 'Jigsaws',
            'active' => request()->route()?->getName() === 'services.framing.jigsaw'
        ],
        [
            'href' => route('services.framing.medals-memorabilia'),
            'name' => 'Medals & Memorabilia',
            'active' => request()->route()?->getName() === 'services.framing.medals-memorabilia'
        ],
    ];

    $customLinks_2 = [
        [
            'href' => route('services.framing.mirror'),
            'name' => 'Mirror',
            'active' => request()->route()?->getName() === 'services.framing.mirror'
        ],
        [
            'href' => route('services.framing.prints-posters'),
            'name' => 'Prints Posters & Photos',
            'active' => request()->route()?->getName() === 'services.framing.prints-posters'
        ],
        [
            'href' => route('services.framing.handcrafted'),
            'name' => 'Handcrafted',
            'active' => request()->route()?->getName() === 'services.framing.handcrafted'
        ],
        [
            'href' => route('services.framing.restorations'),
            'name' => 'Restorations',
            'active' => request()->route()?->getName() === 'services.framing.restorations'
        ],
    ];

    $links = [
        ...$customLinks_1,
        ...$customLinks_2,
        [
            'href' => route('services.other'),
            'name' => 'Other',
            'active' => request()->route()?->getName() === 'services.other'
        ],
    ];
@endphp

<div
    x-on:mouseleave="open = false"
    x-data="{open: false}"
    class="relative"
>
    <div x-on:click="open = !open" x-on:mouseenter="open = true">
        <span
            class="flex text-base font-medium items-center cursor-pointer transition-colors text-secondary-700 hover:text-primary-500"
        >
            Services
            <div x-bind:class="{ 'rotate-180': open }" class="ml-0.5 mt-0.5 transform duration-300">
                <x-icons.chevron-down/>
            </div>
        </span>
    </div>

    {{-- Mobile --}}
    <div x-show="open" x-cloak class="lg:hidden">
        <div class="pl-2 grid sm:grid-cols-2">
            @foreach ($links as $link)
                <x-links.mega-menu-link
                    href="{{$link['href']}}"
                    active="{{$link['active']}}"
                >
                    {{ $link['name'] }}
                </x-links.mega-menu-link>
            @endforeach
        </div>
    </div>

    {{-- Desktop --}}
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="hidden lg:block absolute top-full left-1/2 -translate-x-1/2 z-50 mt-2 min-w-[380px]"
    >
        <div class="bg-white rounded-lg shadow-xl border border-secondary-200 px-6 py-4">
            <div class="grid grid-cols-2 gap-x-8">
                <div>
                    @foreach ($customLinks_1 as $link)
                        <x-links.mega-menu-link
                            href="{{$link['href']}}"
                            active="{{$link['active']}}"
                        >
                            {{ $link['name'] }}
                        </x-links.mega-menu-link>
                    @endforeach
                </div>

                <div>
                    @foreach ($customLinks_2 as $link)
                        <x-links.mega-menu-link
                            href="{{$link['href']}}"
                            active="{{$link['active']}}"
                        >
                            {{ $link['name'] }}
                        </x-links.mega-menu-link>
                    @endforeach
                    <x-links.mega-menu-link
                        href="{{route('services.other')}}"
                        active="{{request()->route()?->getName() === 'services.other'}}"
                    >
                        Other
                    </x-links.mega-menu-link>
                </div>
            </div>
        </div>
    </div>
</div>
