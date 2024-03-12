<div class="h-full my-auto p-8 rounded bg-white text-center hover:translate-y-2 transition">
    <div>
        <h1 class="text-lg"> {{ $review['author_name'] }} </h1>

        <p class="text-gray-400">
            "
            {{ $review['text'] }}
            "
        </p>
    </div>

    <div class="w-full">
        <div class="flex gap-2 mx-auto w-fit mt-6">
            @foreach(range(1, $review['rating']) as $i)
                <x-icons.star/>
            @endforeach
        </div>

        <span class="text-sm text-secondary-700">
            {{ $review['relative_time_description'] }}
        </span>
    </div>
</div>
