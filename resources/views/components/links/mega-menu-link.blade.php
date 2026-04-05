<a
    {{
        $attributes->merge([
            'class' => 'flex text-sm my-3 items-center transition-colors ' . ($active ? 'text-primary-500 font-medium' : 'text-secondary-600 hover:text-primary-500')
        ])
    }}
    href="{{$href}}"
>
    {{ $slot }}
</a>
