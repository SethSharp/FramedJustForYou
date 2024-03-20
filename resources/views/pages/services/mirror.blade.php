@section('title', 'Mirrors - ' . config('app.name'))
@section('description', '')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Mirror
            </x-slot>

            <x-slot name="content">
                Mirror content
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
