<a href="{{$href}}">
    <div class="bg-black/25 rounded-t-full h-56 border-4 border-white overflow-hidden">
        <x-image
            src="{{ $image }}"
            alt="In-store specialised printer"
            additionalClass="object-cover h-full hover:scale-105 transition duration-1000"
        />
    </div>

    <div class="text-secondary-800 text-lg text-center">
        {{ $title }}
    </div>
</a>
