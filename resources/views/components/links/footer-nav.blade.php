@props(['href' => '#', 'active' => false])

<a
    href="{{ $href }}"
    class="text-gray-200 my-2 flex text-md items-center hover:underline decoration-gray-200 px-2 decoration-6 underline-offset-4 transition duration-300 ease-in-out {{ $active ? '!underline' : '' }}"
>
    {{ $slot }}
</a>
