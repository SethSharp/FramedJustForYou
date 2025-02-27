@props(['title' => '', 'id' => ''])

<div {{ $attributes->merge(['class' => 'p-1 sm:p-4 rounded-md']) }} id="{{$id}}">
    @if ($title)
        <x-headings.title-strikethrough title="{{$title}}"/>
    @endif

    <div class="space-y-4 sm:px-4 text-secondary-500 leading-loose {{ $title ? 'mt-6 sm:mt-14 xl:mt-4' : '' }}">
        {{ $content }}
    </div>
</div>
