<a
    {{
        $attributes->merge([
            'class' => 'text-secondary-500 flex text-md my-4 items-center hover:underline decoration-secondary-500 underline-offset-2 ' .  ($active ? '!underline' : '')
        ])
    }}
    href="{{$href}}"
>
    {{ $slot }}
</a>
