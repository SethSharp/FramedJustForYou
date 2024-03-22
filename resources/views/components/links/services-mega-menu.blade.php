@php
    $customLinks_1 = [
        [
            'href' => route('new.services.framing.acrylic'),
            'name' => 'Acrylic',
            'active' => request()->route()?->getName() === 'new.services.framing.acrylic'
        ],
        [
            'href' => route('new.services.framing.canvas'),
            'name' => 'Canvas',
            'active' => request()->route()?->getName() === 'new.services.framing.canvas'
        ],
        [
            'href' => route('new.services.framing.indigenous'),
            'name' => 'Indigenous Art',
            'active' => request()->route()?->getName() === 'new.services.framing.indigenous'
        ],
        [
            'href' => route('new.services.framing.jigsaw'),
            'name' => 'Jigsaws',
            'active' => request()->route()?->getName() === 'new.services.framing.jigsaw'
        ],
        [
            'href' => route('new.services.framing.medals-memorabilia'),
            'name' => 'Medals & Memorabilia',
            'active' => request()->route()?->getName() === 'new.services.framing.medals-memorabilia'
        ],
    ];

    $customLinks_2 = [
        [
            'href' => route('new.services.framing.mirror'),
            'name' => 'Mirror',
            'active' => request()->route()?->getName() === 'new.services.framing.mirror'
        ],
        [
            'href' => route('new.services.framing.prints-posters'),
            'name' => 'Prints Posters & Photos',
            'active' => request()->route()?->getName() === 'new.services.framing.prints-posters'
        ],
        [
            'href' => route('new.services.framing.handcrafted'),
            'name' => 'Handcrafted',
            'active' => request()->route()?->getName() === 'new.services.framing.handcrafted'
        ],
        [
            'href' => route('new.services.framing.restorations'),
            'name' => 'Restorations',
            'active' => request()->route()?->getName() === 'new.services.framing.restorations'
        ],
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

            <div x-bind:class="{ 'rotate-180': open }" class="ml-0.5 transform duration-300">
                <x-icons.chevron-down/>
            </div>
        </div>
    </div>

    {{--  Mobile  --}}
    <div class="flex lg:hidden" x-show="open" x-on:click="open = false">
        <div class="flex w-full mx-4 md:mx-8">
            <div class="grid sm:grid-cols-2 w-full border-gray-200">
                <div>
                    @foreach ($customLinks_1 as $link)
                        <x-links.mega-menu-link
                            href="{{$link['href']}}"
                            active="{{$link['active']}}"
                            class="!text-secondary-200"
                            underline="link-underline-white"
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
                            class="!text-secondary-200"
                            underline="link-underline-white"
                        >
                            {{ $link['name'] }}
                        </x-links.mega-menu-link>
                    @endforeach
                    <x-links.mega-menu-link
                        href="{{route('new.services.other')}}"
                        active="{{request()->route()?->getName() === 'new.services.other'}}"
                        class="!text-secondary-200"
                        underline="link-underline-white"
                    >
                        Other
                    </x-links.mega-menu-link>
                </div>
            </div>
        </div>
    </div>

    <div class="inset-0 absolute right-24 z-50 hidden lg:flex" x-show="open" x-on:click="open = false">
        <div class="mt-20 w-fit ml-auto shadow-2xl">
            <div
                class="bg-secondary-50 rounded-xl shadow-xl px-4 mx-auto py-6 md:flex hidden max-w-7xl w-full"
            >
                <div class="flex w-full">
                    <div class="grid grid-cols-2 gap-y-4 w-full border-gray-200">
                        <div>
                            @foreach ($customLinks_1 as $link)
                                <x-links.mega-menu-link
                                    href="{{$link['href']}}"
                                    active="{{$link['active']}}"
                                    underline="link-underline-secondary"
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
                                    underline="link-underline-secondary"
                                >
                                    {{ $link['name'] }}
                                </x-links.mega-menu-link>
                            @endforeach
                                <x-links.mega-menu-link
                                    href="{{route('new.services.other')}}"
                                    active="{{request()->route()?->getName() === 'new.services.other'}}"
                                    underline="link-underline-secondary"
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
