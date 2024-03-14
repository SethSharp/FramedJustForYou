<a
    {{ $attributes->merge(['class' => 'text-secondary-500 flex text-md my-4 items-center decoration-6 underline-offset-4 transition duration-300 ease-in-out ']) }}
    href="{{$href}}"
    class="{{ $active ? '!underline' : '' }}"
>
    <x-links.underline underline="link-underline-secondary"> {{ $slot }} </x-links.underline>
</a>
