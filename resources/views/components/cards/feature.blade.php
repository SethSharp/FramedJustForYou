@props(['image', 'content', 'title' => null, 'imagePosition' => 'right'])

<div class="space-y-4 lg:relative lg:flex items-center justify-center">
    @if ($imagePosition === 'right')
        <x-section.content class="lg:absolute right-1/3 z-10">
            @if ($title)
                <x-slot name="title">
                    {{ $title }}
                </x-slot>
            @endif

            <x-slot name="content">
                <div class="w-full border-l-4 border-primary-500 py-4 pl-5">
                    {{ $content }}
                </div>
            </x-slot>
        </x-section.content>

        <div class="lg:w-1/3 lg:ml-auto lg:relative">
            {{ $image }}
        </div>
    @else
        <div class="lg:w-1/3 lg:relative mr-auto">
            {{ $image }}
        </div>

        <x-section.content class="lg:absolute left-1/3 z-10">
            @if ($title)
                <x-slot name="title">
                    {{ $title }}
                </x-slot>
            @endif

            <x-slot name="content">
                <div class="w-full border-l-4 border-primary-500 py-4 pl-5">
                    {{ $content }}
                </div>
            </x-slot>
        </x-section.content>
    @endif
</div>
