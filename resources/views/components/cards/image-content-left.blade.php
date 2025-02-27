@props(['content', 'image', 'title' => null])
<div class="space-y-4 lg:relative lg:flex items-center justify-center">
    <x-section.content class="!bg-secondary-100 lg:absolute right-1/3 z-10 border-none">
        @if ($title)
            <x-slot name="title">
                {{ $title }}
            </x-slot>
        @endif

        <x-slot name="content">
            <div class="w-full border-l-4 border-primary-500 py-2 pl-4">
                {{$content}}
            </div>
        </x-slot>
    </x-section.content>

    <div class="lg:w-1/3 lg:ml-auto lg:relative">
        {{ $image }}
    </div>
</div>
