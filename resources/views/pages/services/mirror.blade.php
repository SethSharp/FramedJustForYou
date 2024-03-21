@section('title', 'Mirrors - ' . config('app.name'))
@section('description', 'Mirror framing can really transform your personal space where you have a mirror.')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Mirror
            </x-slot>

            <x-slot name="content">
                Framing mirrors is something that can really transform your personal space and
                reflect your character. Mirrors can be so bland so why not frame one? We can frame all sizes of mirrors
                you have and can even order in one to your sze requirements - meaning we can provide a upfront quote of
                the mirror as well!
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
