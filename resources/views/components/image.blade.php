@props(['src', 'alt', 'additionalClass' => ''])

<img
    src="{{ 'https://d2bq6z9lholfa6.cloudfront.net/images/' . $src }}"
    alt="{{ $alt }}"
    aria-label="{{ $alt }}"
    class="{{ $additionalClass}}"
/>
