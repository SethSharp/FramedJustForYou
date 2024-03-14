@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'p-1 sm:p-4 rounded-md']) }}>
    @if ($title)
        <x-title-strikethrough title="{{$title}}" />
    @endif

    <div class="space-y-4 sm:px-4 text-secondary-500 leading-loose {{ $title ? 'mt-4' : '' }}">
        {{ $content }}
    </div>
</div>
