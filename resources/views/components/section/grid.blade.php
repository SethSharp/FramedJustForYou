@props(['cols' => 3])

<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-{{ $cols }} gap-4">
    {{ $slot }}
</div>
