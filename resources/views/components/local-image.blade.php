@props(['src', 'alt'])

<img
    src="{{ asset('/images') . $src }}"
    alt="{{ $alt }}"
    aria-label="{{ $alt }}"
    {{ $attributes->merge(['class' => 'rounded-md']) }}
/>
