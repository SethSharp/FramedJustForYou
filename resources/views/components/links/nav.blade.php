<a
    href="{{$href}}"
    class="flex text-base font-medium items-center transition-colors {{ $active ? 'text-primary-500 font-semibold' : 'text-secondary-700 hover:text-primary-500' }}"
>
    {{ $slot }}
</a>
