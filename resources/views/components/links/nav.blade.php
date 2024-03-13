<a
    {{ $attributes->merge(['class' => 'text-white flex text-2xl md:text-xl items-center decoration-6 underline-offset-4 transition duration-300 ease-in-out ']) }}
    href="{{$href}}"
    class="{{ $active ? '!underline hover:!underline-none' : '' }}"
>
    <x-links.underline> {{ $slot }}</x-links.underline>
</a>
