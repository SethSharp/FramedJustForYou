<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Canvases
                </x-slot>

                <x-slot name="content">
                    <p>
                        Have your canvases stretched on quality stretcher frames. All canvases are hand-stretched using stainless steel staples, using 100% Cotton, 12oz triple primed canvas, quality timber and stainless steel staples. We offer a full guarantee against warping and sagging.
                    </p>

                    <p>
                        If you're considering having an artwork or photograph on canvas stretched, it's essential to understand what you're paying for before choosing a framer.

                        We also stock ready-made canvases, perfect for your painting projects. If you require a specific size not in stock, we can arrange for a custom-stretched canvas using our high-quality materials. These canvases are ready to hang, allowing you to showcase your finished piece instantly in your space.
                    </p>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    How can I frame canvas?
                </x-slot>

                <x-slot name="content">
                    <p>
                        We offer multiple different ways to frame canvas's each with a select taste and style.
                    </p>

                    <div class="grid sm:grid-cols-2 w-3/4 mx-auto gap-6 bg-secondary-200">
                        <x-image
                            src="acrylic/golf-ball-display.webp"
                            alt="Golf Ball display in example home space"
                            additionalClass="h-full object-cover"
                            caption="No Frame"
                        />
                        <x-image
                            src="acrylic/golf-ball-display.webp"
                            alt="Golf Ball display in example home space"
                            additionalClass="h-full object-cover"
                            caption="Inset Frame"
                        />

                        <x-image
                            src="acrylic/golf-ball-display.webp"
                            alt="Golf Ball display in example home space"
                            additionalClass="h-full object-cover"
                            caption="Standard Frame"
                        />

                        <x-image
                            src="acrylic/golf-ball-display.webp"
                            alt="Golf Ball display in example home space"
                            additionalClass="h-full object-cover"
                            caption="Old Style"
                        />
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
