@props(['level' => 3])

@php
    $tag = 'h' . min(max((int) $level, 1), 6);
@endphp

<div>
    <{{ $tag }} class="text-secondary-700 text-md md:text-xl">{{ $slot }}</{{ $tag }}>
    <div class="w-24 h-[1px] mb-2 bg-secondary-700"></div>
</div>
