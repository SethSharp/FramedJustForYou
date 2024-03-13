<a href="{{$href}}">
    <div class="bg-black/25 rounded-t-full h-64 border border-secondary-400 overflow-hidden">
        <x-image
            src="{{ $image }}"
            alt="In-store specialised printer"
            additionalClass="object-cover h-full hover:scale-105 transition duration-1000"
        />
    </div>

    <div class="text-secondary-600 text-md text-center">
        {{ $title }}
    </div>
</a>
