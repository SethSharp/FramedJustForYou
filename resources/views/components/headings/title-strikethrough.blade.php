@props(['title', 'level' => 2])

@php
    $tag = 'h' . min(max((int) $level, 1), 6);
@endphp

<div class="flex">
    <div class="w-12 h-0.5 mr-2 bg-primary-500 my-auto"></div>
    <{{ $tag }} class="text-primary-500 text-lg md:text-2xl">{{ $title }}</{{ $tag }}>
    <div class="w-12 h-0.5 ml-2 bg-primary-500 my-auto"></div>
</div>
