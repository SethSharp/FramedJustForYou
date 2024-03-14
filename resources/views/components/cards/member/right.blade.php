<div class="w-full my-2 flex-wrap md:flex-no-wrap flex rounded-xl overflow-hidden">
    <div class="w-full lg:w-1/2 flex">
        @if (isset($member['src']) )
            <x-image class="mx-auto my-auto w-3/4" src="{{$member['src']}}" alt="{{$member['alt']}}" />
        @endif
    </div>

    <div class="w-full flex">
        <div class="rounded-r-xl transition duration-700 p-2">
            <h1 class="text-2xl text-gray-600">{{ $member['name'] }}</h1>

            <span class="text-lg text-gray-400"> {{ $member['position'] }} </span>

            <p class="mt-4 text-gray-400">
                {{ $member['description'] }}
            </p>
        </div>
    </div>
</div>
