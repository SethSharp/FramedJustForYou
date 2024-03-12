@props(['src', 'alt', 'additionalClass' => ''])

<img
    src="{{ config('app.cloudfront_url') .'/images/' . $src }}"
    alt="{{ $alt }}"
    aria-label="{{ $alt }}"
    class="{{ $additionalClass }}"
/>
