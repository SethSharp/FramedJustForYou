<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Printing Services
                </x-slot>

                <x-slot name="content">
                    <div class="lg:relative">
                        <x-section.content class="!bg-secondary-100 lg:absolute top-16 left-0 lg:w-3/5 z-10 border-none">
                            <x-slot name="content">
                                <x-cards.right class="!bg-secondary-100">
                                    We have a specialised printer in store, where we can print just about anything in the highest quality.
                                    As you can see in the image, we have the ability to print very large images and keep the quality of that image in tact.
                                    Allowing us to just about do photo on printing paper to go perfectly as a background to your frame.
                                </x-cards.right>
                            </x-slot>
                        </x-section.content>

                        <div class="w-3/4 lg:w-1/2 mx-auto lg:m-0 lg:ml-auto lg:relative">
                            <x-image
                                src="printing/printer.webp"
                                 additionalClass="object-cover h-[200px] md:h-[350px] hover:scale-105 transition duration-1000 w-full border-4 border-secondary-100 rounded"
                                 alt="Our Specialised printer, printing a background for a frame."
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Our Approach
                </x-slot>

                <x-slot name="content">
                    <div>
                        Let's say you went on a really nice holiday to Hawaii or to Fraser Island and managed to snap the perfect sunset or the perfect selfie
                        of you and your partner. Well, we can print that for you on a ready to hang canvas, any photo you have on a device we can download that
                        and fit it to the correct size you want with the canvas sizes below.

                        <div class="my-6">
                            <x-alerts.warning>
                                Prices can/do change so please call us up to double check that we have this information up to date.
                            </x-alerts.warning>
                        </div>

                        <p> These prices are fully printed and framed items </p>
                        <div>
                            <x-table.standard :data="config('framed.pricing.squareCanvas')" />
                            <x-table.standard :data="config('framed.pricing.canvasPanaromic')" />
                            <x-table.standard :data="config('framed.pricing.canvasRectangle')" />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>

            <x-section.content>
                <x-slot name="title"> Standard Printing</x-slot>

                <x-slot name="content">
                    <p> Prices of just standard printing and no framing. </p>
                    <x-table.standard :data="config('framed.pricing.printingPaper')" />
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
