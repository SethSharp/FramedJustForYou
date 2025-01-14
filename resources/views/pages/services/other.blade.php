@section('title', 'Other - ' . config('app.name'))
@section('description', 'Among everything we offer, there is more...')

@php
    $links = [
        [
            'href' => '#ready-made',
            'title' => 'Ready Made Frames'
        ],
        [
            'href' => '#glass-cutting',
            'title' => 'Glass Cutting'
        ],
        [
            'href' => '#matboard-cutting',
            'title' => 'Matboard Cutting'
        ],
        [
            'href' => '#framing-materials-and-supplies',
            'title' => 'Framing Materials & Supplies'
        ]
    ];
@endphp


<x-layouts.app>
    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Our Other Services
            </x-slot>

            <x-slot name="content">
                <div class="lg:flex gap-4">
                    <div class="lg:w-3/5">
                        Among everything that we do, there is also other small things you may need. Such as a simple
                        matboard, glass cutout, framing supplies or our ready made frames.
                    </div>
                    <div class="lg:w-2/5 mt-6 lg:mt-0 flex justify-center">
                        <x-section.whats-on-this-page :links="$links"/>
                    </div>
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="ready-made">
            <x-slot name="title"> Ready Made Frames</x-slot>

            <x-slot name="content">
                <x-cards.image-content-left>
                    <x-slot name="image">
                        <x-image
                            src="readyMade/graduation.webp"
                            alt="Graduation frame"
                            class="absolute w-full z-10 -rotate-12"
                            class="h-96 mx-auto"
                        />
                    </x-slot>

                    <x-slot name="content">
                        We have multiple hand made, ready made frames ready to hang in your
                        space. We stock the most common sizes and is a great option for your
                        photo/prints without having to go down a possibly more expensive route
                        in custom framing yet still provides a great look or if you are in a
                        rush for a frame.
                    </x-slot>
                </x-cards.image-content-left>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="glass-cutting">
            <x-slot name="title"> Glass & Glass Cutting</x-slot>

            <x-slot name="content">
                Many of us make the mistake of dropping a frame while moving or from our kids
                playing a bit too rough! Well we have you sorted, bring in your frame and we will
                fit it with some of our high quality glass options as mentioned above. We can
                provide a quote over the phone but make sure to visit us to check out the different
                kinds of glass up close.
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="matboard-cutting">
            <x-slot name="title"> Matboard Cutting</x-slot>

            <x-slot name="content">
                Here we are ahead of the game using a computerised matboard cutter. This
                allows us to cut and make just about any shape, any curve and do it with
                precision. This is perfect for items requiring multiple cutouts such as a
                winning a competition with multiple medals or a collection of items, we can
                map out the layout and achieve an amazing looking piece containing multiple
                items, or if you have a record then we can perfectly map the correct
                circular shape to fit the circular shape.

                <div class="grid sm:grid-cols-3 gap-x-4 gap-y-4 mt-8">
                    <x-image
                        src="matboards/multiple-squares-and-circles.webp"
                        alt="2 Rows of 6 cut outs, side by side"
                        class="h-auto objecct-cover object-center"
                    />

                    <x-image
                        src="matboards/shape-red.webp"
                        alt="Corner square shapes with a internal mat"
                        class="h-auto objecct-cover object-center"
                    />

                    <x-image
                        src="matboards/tools.webp"
                        alt="3 different sized cutouts holding different items"
                        class="h-auto objecct-cover object-center"
                    />
                </div>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content id="framing-materials-and-supplies">
            <x-slot name="title"> Framing Materials & Supplies</x-slot>

            <x-slot name="content">
                We offer many framing supplies for you to use in your own projects!

                <ul class="my-2 space-y-2 list-disc list-inside">
                    <li>Canvas off the roll</li>
                    <li>Matboards</li>
                    <li>Glass</li>
                    <li>Artiteq Hanging Systems</li>
                </ul>

                Explore our comprehensive selection of framing essentials, offering
                mouldings by the length, matting by the sheet, and a variety of d-rings in
                different sizes. Additionally, we provide screws and an array of framing
                hardware, tapes, and backing boards available in both fomecore and MDF.
                Complete your framing project with our assortment of wire, string, and
                standbacks.
            </x-slot>
        </x-section.content>
    </x-section.wrapper>
</x-layouts.app>
