@props(['href', 'image', 'title', 'alt' => ''])

<a href="{{$href}}">
    <div>
        <div class="relative rounded-lg h-32 hover:opacity-75 transition duration-1000 border border-secondary-300 overflow-hidden">
            <x-image
                src="{{ $image }}"
                alt="{{ $alt }}"
                class="object-cover w-full h-full"
            />

            <div class="absolute inset-0 bg-black/25">
            </div>
        </div>
    </div>

    <div class="text-secondary-600 text-md text-center px-2">
        {{ $title }}
    </div>
</a>
