@section('title', 'About - ' . config('app.name'))
@section('description', 'Meet the team of Framed Just For You and find out how this Australian owned & operated business started.')

<x-layouts.app>
    <x-section.section class="!bg-gradient-to-tl !from-white !to-primary-50">
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    About Us
                </x-slot>

                <x-slot name="content">
                    Framed Just For You was established in 1997 on Oxley Drive. In 2000, the store was relocated to 142
                    Brisbane Road, where it served the community for the subsequent two decades. A significant move took
                    place in August 2019, bringing the business to its current location at 122 Brisbane Road. With
                    nearly 60 years of collective experience in the picture framing industry, the journey continues.
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.divider/>

        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Meet the Team
                </x-slot>

                <x-slot name="content">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($team as $member)
                            <x-cards.member.card :member="$member"/>
                        @endforeach
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
