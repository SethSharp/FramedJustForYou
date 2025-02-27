@props(['href', 'src', 'title', 'alt', 'loading' => 'eager'])

<a href="{{ $href }}" class="block w-full">
    <div
        class="relative rounded-3xl h-64 hover:scale-105 transition duration-1000 border border-secondary-300 overflow-hidden">
        <x-image
            src="{{ $src }}"
            alt="{{ $alt }}"
            loading="{{ $loading }}"
            class="object-cover h-64 w-full rounded-none"
        />

        <div class="absolute inset-0 flex flex-col justify-end">
            <div class="bg-black/50">
                <div class="text-white text-md text-center p-2">
                    {{ $title }}
                </div>
            </div>
        </div>
    </div>
</a>
