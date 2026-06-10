@props(['title', 'maxWidth' => 'max-w-2xl'])

<div class="{{ $maxWidth }} mx-auto text-center mb-12">
    <x-heading variant="strikethrough">{{ $title }}</x-heading>
    {{ $slot }}
</div>
