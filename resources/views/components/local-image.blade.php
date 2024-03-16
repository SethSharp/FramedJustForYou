@props(['src', 'alt', 'additionalClass' => ''])

<img
    src="{{ asset('/images') . $src }}"
    alt="{{ $alt }}"
    aria-label="{{ $alt }}"
    class="{{ $additionalClass }}"
/>
