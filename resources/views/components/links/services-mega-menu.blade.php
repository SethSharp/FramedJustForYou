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
@endphp

<div
    x-data="{open: false}"
>
    <div x-on:click="open = !open" x-transition>
        <span
            class="text-white mt-1.5 flex text-lg cursor-pointer decoration-2 items-center hover:underline underline-offset-4"
        >
            Services
            <div x-bind:class="{ 'rotate-180': open }" class="ml-0.5 mt-0.5 transform duration-300">
                <x-icons.chevron-down/>
            </div>
        </span>
    </div>

    {{--  Mobile  --}}
    <div class="flex lg:hidden" x-show="open" x-on:click="open = false">
        <div class="flex w-full pl-2">
            <div class="grid sm:grid-cols-2 w-full border-gray-200">
                <div>
                    @foreach ($customLinks_1 as $link)
                        <x-links.mega-menu-link
                            href="{{$link['href']}}"
                            active="{{$link['active']}}"
                            class="!text-secondary-200 !decoration-secondary-200"
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
                            class="!text-secondary-200 !decoration-secondary-200"
                        >
                            {{ $link['name'] }}
                        </x-links.mega-menu-link>
                    @endforeach
                    <x-links.mega-menu-link
                        href="{{route('services.other')}}"
                        active="{{request()->route()?->getName() === 'services.other'}}"
                        class="!text-secondary-200 !decoration-secondary-200"
                    >
                        Other
                    </x-links.mega-menu-link>
                </div>
            </div>
        </div>
    </div>

    <div class="inset-0 absolute right-24 z-50 hidden lg:flex" x-show="open" x-on:click="open = false">
        <div class="mt-16 w-fit ml-auto shadow-2xl">
            <div
                class="bg-secondary-50 rounded-lg shadow-xl px-4 mx-auto md:flex hidden max-w-7xl w-full"
            >
                <div class="flex w-full">
                    <div class="grid grid-cols-2 gap-y-4 w-full border-gray-200">
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
    </div>
</div>
