@section('title', 'Handcrafted - ' . config('app.name'))
@section('description', '')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Handcrafted
            </x-slot>

            <x-slot name="content">
                Content
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
