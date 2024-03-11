<div class="h-44 p-8 rounded bg-white text-center">
    <div>
        <h1 class="text-lg"> {{ $reviewer }} </h1>

        <p class="text-gray-400">
            "
            {{ $review }}
            "
        </p>
    </div>

    <div class="flex gap-2 mx-auto w-fit mt-6">
        @foreach(range(0, $rating) as $i)
            <x-icons.star/>
        @endforeach
    </div>
</div>
