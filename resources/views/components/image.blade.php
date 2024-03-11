@props(['src', 'alt', 'additionalClass' => ''])

<img
    src="{{ config('app.cloudfront_url') . $src }}"
    alt="{{ $alt }}"
    aria-label="{{ $alt }}"
    class="{{ $additionalClass }}"
/>
