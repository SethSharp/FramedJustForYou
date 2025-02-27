@props(['src', 'alt', 'caption' => null])

<div class="{{ $caption ? 'm-4' : '' }}">
    <img
        src="{{ asset('/images') . $src }}"
        alt="{{ $alt }}"
        aria-label="{{ $alt }}"
        {{ $attributes->merge(['class' => 'rounded-md max-h-64 mx-auto']) }}
    />

    @if ($caption)
        <p class="text-center text-sm px-4">
            {{ $caption }}
        </p>
    @endif
</div>
