@props(['breadcrumbs' => []])
<div
>
    <div class="ml-20 text-gray-500 mt-8">
        <x-breadcrumbs.breadcrumb>
            <x-breadcrumbs.breadcrumb-list>
                @foreach($breadcrumbs as $index => $breadcrumb)
                    <x-breadcrumbs.breadcrumb-item>
                        <x-breadcrumbs.breadcrumb-link href="{{ $breadcrumb['href'] }}">
                            {{ $breadcrumb['name'] }}
                        </x-breadcrumbs.breadcrumb-link>
                    </x-breadcrumbs.breadcrumb-item>

                    @if($index+1 < count($breadcrumbs))
                        <x-breadcrumbs.breadcrumb-separator/>
                    @endif
                @endforeach
            </x-breadcrumbs.breadcrumb-list>
        </x-breadcrumbs.breadcrumb>
    </div>

    {{ $slot }}
</div>
