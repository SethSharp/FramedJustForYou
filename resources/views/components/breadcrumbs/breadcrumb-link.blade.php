<a href="{{ $href }}" {{ $attributes->merge(['class' => 'transition-colors hover:text-foreground']) }}>
    {{ $slot }}
</a>
