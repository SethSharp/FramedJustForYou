<div class="h-full my-auto p-8 rounded bg-secondary-50 text-center hover:-translate-y-2 transition">
    <div class="h-3/4">
        <h1 class="text-lg"> {{ $review['author_name'] }} </h1>

        <div class="text-secondary-400 inline-block">
            <div class="rotate-180 flex justify-start transform origin-left">
                <x-icons.quotation-mark />
            </div>

            {{ $review['text'] }}

            <div class="flex justify-end">
                <x-icons.quotation-mark />
            </div>
        </div>

    </div>

    <div class="w-full h-1/4">
        <div class="flex gap-2 mx-auto w-fit">
            @foreach(range(1, $review['rating']) as $i)
                <x-icons.star/>
            @endforeach
        </div>

        <span class="text-xs text-secondary-500">
            {{ $review['relative_time_description'] }}
        </span>
    </div>
</div>
