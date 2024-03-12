@props(['href' => '#', 'active' => false])

<a
    href="{{ $href }}"
    class="text-gray-200 flex text-2xl md:text-xl items-center hover:underline decoration-gray-200 decoration-6 underline-offset-4 transition duration-300 ease-in-out {{ $active ? '!underline' : '' }}"
>
    {{ $slot }}
</a>
