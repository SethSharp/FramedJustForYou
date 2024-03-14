<a
    href="{{$href}}"
    class="text-secondary-300 flex text-sm my-2 items-center decoration-6 underline-offset-4 transition duration-300 ease-in-out {{ $active ? '!underline' : '' }}"
>
    <x-links.underline underline="link-underline-secondary"> {{ $slot }}</x-links.underline>
</a>
