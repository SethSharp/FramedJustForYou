<a
    href="{{$href}}"
    class="text-white flex text-2xl md:text-xl items-center decoration-6 underline-offset-4 transition duration-300 ease-in-out {{ $active ? '!underline' : '' }}"
>
    <x-links.underline> {{ $slot }}</x-links.underline>
</a>
