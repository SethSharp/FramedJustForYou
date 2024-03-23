<div>
    <div>
        @if (isset($member['src']) )
            <x-local-image
                src="{{$member['src']}}"
                alt="{{$member['alt']}}"
                class="shadow mx-auto rounded-2xl overflow-hidden h-full"
            />
        @endif
    </div>

    <div class="flex max-w-2xl mx-auto">
        <div class="rounded-r-xl transition duration-700 p-2">
            <h1 class="text-xl text-secondary-800 font-semibold">{{ $member['name'] }}</h1>

            <span class="text-base text-secondary-400"> {{ $member['position'] }} </span>

            <p class="mt-4 !font-base text-md text-secondary-500">
                {{ $member['description'] }}
            </p>
        </div>
    </div>
</div>
