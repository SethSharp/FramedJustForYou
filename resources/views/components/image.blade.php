@props(['src', 'alt', 'additionalClass' => '', 'caption' => null])

<div class="{{ $caption ? 'm-4' : '' }}">
    <img
        src="{{ config('app.cloudfront_url') .'/images/' . $src }}"
        alt="{{ $alt }}"
        aria-label="{{ $alt }}"
        class="{{ $additionalClass }}"
    />

    @if ($caption)
        <p class="text-center px-4">
            {{ $caption }}
        </p>
    @endif
</div>
