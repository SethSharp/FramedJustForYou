@props(['src', 'alt', 'imageStyle' => null, 'overline' => null])

<div class="relative z-20">
    <x-image
        :src="$src"
        :alt="$alt"
        :style="$imageStyle"
        class="object-cover min-h-[400px] sm:min-h-[400px] md:min-h-[400px] lg:min-h-[450px] xl:min-h-[500px] w-full"
    />
    <div class="absolute inset-0 bg-black/70">
        <div class="flex flex-col justify-center h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($overline)
                <x-heading variant="overline">{{ $overline }}</x-heading>
            @endif

            <h1 class="text-3xl sm:text-5xl md:text-6xl text-white mt-2 font-bold">
                {{ $title }}
            </h1>

            @isset($subtitle)
                <p class="text-secondary-300 mt-3 text-base sm:text-lg max-w-lg">
                    {{ $subtitle }}
                </p>
            @endisset

            {{ $slot }}
        </div>
    </div>
</div>
