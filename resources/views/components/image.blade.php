@props(['src', 'alt', 'caption' => null])

<div class="{{ $caption ? 'm-4' : '' }}">
    <img
        src="{{ config('app.cloudfront_url') .'/images/' . $src }}"
        alt="{{ $alt }}"
        aria-label="{{ $alt }}"
        {{ $attributes->merge(['class' => 'rounded-md']) }}
    />

    @if ($caption)
        <p class="text-center text-sm px-4">
            {{ $caption }}
        </p>
    @endif
</div>
