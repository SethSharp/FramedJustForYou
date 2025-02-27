@props(['image', 'content', 'title' => null])

<div class="space-y-4 lg:relative lg:flex items-center justify-center">
    <div class="lg:w-1/3 lg:relative mr-auto">
        {{ $image }}
    </div>

    <x-section.content class="!bg-secondary-100 lg:absolute left-1/3 z-10 border-none">
        @if ($title)
            <x-slot name="title">
                {{ $title  }}
            </x-slot>
        @endif

        <x-slot name="content">
            <div class="w-full border-l-4 border-primary-500 py-6 pl-4">
                {{$content}}
            </div>
        </x-slot>
    </x-section.content>
</div>
