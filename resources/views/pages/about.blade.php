<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    About Us
                </x-slot>

                <x-slot name="content">
                    Framed Just For You was established in 1997 on Oxley Drive. In 2000, the store was relocated to 142 Brisbane Road, where it served the community for the subsequent two decades. A significant move took place in August 2019, bringing the business to its current location at 122 Brisbane Road. With nearly 60 years of collective experience in the picture framing industry, the journey continues.
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Meet the Team
                </x-slot>

                <x-slot name="content">
                    @foreach($team as $member)
                        <x-cards.member.right :member="$member" />
                    @endforeach
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
