@props(['href', 'image', 'title', 'alt'])

<a href="{{$href}}">
    <div>
        <div class="relative rounded-t-full h-64 hover:scale-105 transition duration-1000 border border-secondary-300 overflow-hidden">
            <x-image
                src="{{ $image }}"
                alt="{{ $alt }}"
                class="object-cover h-full !rounded-none"
            />

            <div class=" size-full inset-0 bg-black/50">
            </div>
        </div>
    </div>

    <div class="text-secondary-600 text-md text-center">
        {{ $title }}
    </div>
</a>
