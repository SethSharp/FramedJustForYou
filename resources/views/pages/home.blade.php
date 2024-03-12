<x-layouts.app>
    <x-section.wrapper>
        <h1 class="text-6xl tracking-tight font-extrabold">
            Framed Just For You
        </h1>
    </x-section.wrapper>

    <x-section.wrapper>
        <x-section.content>
            <x-slot name="title">
                Who are we
            </x-slot>

            <x-slot name="content">
                <x-cards.right>
                    Small piece of the company
                </x-cards.right>

                <x-cards.left>
                    Popular services with some big name clients
                </x-cards.left>
            </x-slot>
        </x-section.content>
    </x-section.wrapper>

    <x-section.wrapper>
        <div>
            <h1> What we offer </h1>
            <p> What we offer allows your frame to be transformed from 0 to 1000 & items to transform your name. Lets
                see what we offer to allow this </p>

            <div class="w-3/4 mx-auto">
                <x-section.grid cols="{{4}}">
                    <x-cards.arch title="1000 Frames to choose from">
                        This is some content here
                    </x-cards.arch>

                    <x-cards.arch title="Thousands of matboard to select">
                        This is some content here
                    </x-cards.arch>

                    <x-cards.arch title="Advanced Matboard Cutting">
                        This is some content here
                    </x-cards.arch>

                    <x-cards.arch title="Advanced Printing Service">
                        This is some content here
                    </x-cards.arch>

                    <x-cards.arch title="Ready Made Frames">
                        This is some content here
                    </x-cards.arch>

                    <x-cards.arch title="Gallery">
                        This is some content here
                    </x-cards.arch>
                </x-section.grid>
            </div>
        </div>
    </x-section.wrapper>

    <x-section.wrapper>
        <div>
            <h1>Our New Gallery!</h1>
            <p> We have recently renovated and modernised our gallery. This is where we hold some absolutely magnificent
                frames, allowing you to.... </p>
        </div>
    </x-section.wrapper>

    <x-section.wrapper>
        <div class="w-3/4 mx-auto py-4">
            <x-section.grid>
                <x-cards.google-review rating="{{5}}" reviewer="Someone" review="Amazing"/>

                <x-cards.google-review rating="{{4.5}}" reviewer="Someone" review="Awesome"/>

                <x-cards.google-review rating="{{4.5}}" reviewer="Someone" review="Astonished!"/>
            </x-section.grid>
        </div>
    </x-section.wrapper>
</x-layouts.app>
