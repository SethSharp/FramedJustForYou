@section('title', 'Prints, Posters & Photos - ' . config('app.name'))
@section('description', '')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Prints, Posters & Photos
            </x-slot>

            <x-slot name="content">
                prints-posters-photos
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
