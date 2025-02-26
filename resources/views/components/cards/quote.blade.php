@props(['user'])

<div class="bg-white rounded-lg overflow-hidden flex flex-col h-full">
    <div class="w-3/4 mx-auto mt-4">
        <span class="italic text-lg">
            "{{ $slot }}"
        </span>
    </div>

    <div class="flex-grow text-gray-400">
        <div class="h-full flex">
            <span class="my-auto mx-auto">
                - {{ $user }}
            </span>
        </div>
    </div>
</div>
