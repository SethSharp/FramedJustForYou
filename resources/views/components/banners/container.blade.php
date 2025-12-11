@if (now()->month === 12)
    <x-banners.christmas />
@else
    <x-banners.main />
@endif
