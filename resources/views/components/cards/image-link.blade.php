@props(['href', 'src', 'title', 'alt', 'loading' => 'lazy', 'size' => 'md'])

@php
$sizes = [
    'sm' => 'h-44',
    'md' => 'h-64',
];
$height = $sizes[$size] ?? $sizes['md'];
@endphp

<a href="{{ $href }}" class="group block w-full">
    <div class="relative {{ $height }} rounded-2xl overflow-hidden border border-secondary-300 shadow-md hover:shadow-xl transition-shadow duration-300">
        <x-image
            src="{{ $src }}"
            alt="{{ $alt }}"
            loading="{{ $loading }}"
            class="object-cover object-center {{ $height }} w-full rounded-none transition-transform duration-500 group-hover:scale-110"
        />

        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

        <div class="absolute inset-0 flex flex-col justify-end">
            <div class="text-white text-md text-center p-3 font-medium">
                {{ $title }}
            </div>
        </div>
    </div>
</a>
