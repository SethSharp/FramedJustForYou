@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'p-4 rounded-md']) }}>
    @if ($title)
        <x-other-title title="{{$title}}" />
    @endif

    <div class="space-y-4 mt-4 px-4 text-secondary-500 leading-loose">
        {{ $content }}
    </div>
</div>
