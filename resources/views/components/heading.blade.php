@props(['variant' => 'default', 'tag' => 'h2'])

@php
$variants = [
    'default' => [
        'text' => 'text-black text-lg md:text-2xl tracking-tight',
        'bar' => 'bg-black',
    ],
    'secondary' => [
        'text' => 'text-secondary-700 text-md md:text-xl tracking-tight',
        'bar' => 'bg-secondary-700',
    ],
    'overline' => [
        'text' => 'text-primary-500 text-lg md:text-2xl tracking-tight',
        'bar' => 'bg-primary-500',
    ],
    'strikethrough' => [
        'text' => 'text-primary-500 text-lg md:text-2xl tracking-tight',
        'bar' => 'bg-primary-500',
    ],
];

$v = $variants[$variant] ?? $variants['default'];
@endphp

@if ($variant === 'strikethrough')
    <div class="flex items-center gap-2">
        <div class="flex-1 h-0.5 {{ $v['bar'] }}"></div>
        <{{ $tag }} class="{{ $v['text'] }}">{{ $slot }}</{{ $tag }}>
        <div class="flex-1 h-0.5 {{ $v['bar'] }}"></div>
    </div>
@elseif ($variant === 'overline')
    <div>
        <div class="w-16 h-0.5 mb-2 {{ $v['bar'] }}"></div>
        <{{ $tag }} class="{{ $v['text'] }}">{{ $slot }}</{{ $tag }}>
    </div>
@else
    <div>
        <{{ $tag }} class="{{ $v['text'] }}">{{ $slot }}</{{ $tag }}>
        <div class="w-16 h-0.5 mt-1 mb-2 {{ $v['bar'] }}"></div>
    </div>
@endif
