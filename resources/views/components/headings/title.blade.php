@props(['level' => 2])

@php
    $tag = 'h' . min(max((int) $level, 1), 6);
@endphp

<div>
    <{{ $tag }} class="text-black text-lg md:text-2xl">{{ $slot }}</{{ $tag }}>
    <div class="w-24 h-0.5 mb-2 bg-black"></div>
</div>
