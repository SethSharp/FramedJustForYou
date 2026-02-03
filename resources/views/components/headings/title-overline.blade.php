@props(['level' => null])

@php
    $tag = $level ? 'h' . min(max((int) $level, 1), 6) : 'p';
@endphp

<div>
    <div class="w-24 h-0.5 mb-2 bg-primary-500"></div>
    <{{ $tag }} class="text-primary-500 text-lg md:text-2xl">{{ $slot }}</{{ $tag }}>
</div>
