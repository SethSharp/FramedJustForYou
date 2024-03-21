@section('title', 'Handcrafted - ' . config('app.name'))
@section('description', 'We have seen all different levels of restorations, from big jobs right down to the smallest inconvenience. We know how to do it all and ensure you will have a completely transformed piece.')

<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Restorations
            </x-slot>

            <x-slot name="content">
                <p class="mb-4">
                    If you have a frame or picture that needs to well deserved tender loving care,
                    then we can provide that.
                </p>

                <h4 class="text-xl mt-5">Our Process</h4>
                <ul class="px-4 list-decimal list-inside space-y-4 mt-2">
                    <li>Make a high quality copy of the photo</li>
                    <li>Move into photoshop and make necessary adjustments</li>
                    <li>Print to correct size using our state of the art printing system</li>
                    <li>Discover the look that you want to go for and put together the items</li>
                    <li>Combine all pieces together using the new printed photo</li>
                    <li>Hang Up!</li>
                </ul>

                <x-image
                    src="restorations/reprint-and-frame.webp"
                    alt="Reprinted and framed photo"
                />
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
