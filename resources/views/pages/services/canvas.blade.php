<x-layouts.app>
    <x-section.section>
        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    Canvases
                </x-slot>

                <x-slot name="content">
                    <p>
                        Have your canvases stretched on quality stretcher frames. All canvases are hand-stretched using
                        stainless steel staples, using 100% Cotton, 12oz triple primed canvas, quality timber and
                        stainless steel staples. We offer a full guarantee against warping and sagging.
                    </p>

                    <div class="md:flex gap-4">
                        <div class="md:w-1/2 flex justify-center">
                            <p class="my-auto p-6">
                                If you're considering having an artwork or photograph on canvas stretched, it's
                                essential to
                                understand what you're paying for before choosing a framer.

                                We also stock ready-made canvases, perfect for your painting projects. If you require a
                                specific
                                size not in stock, we can arrange for a custom-stretched canvas using our high-quality
                                materials. These canvases are ready to hang, allowing you to showcase your finished
                                piece
                                instantly in your space.
                            </p>
                        </div>
                        <div class="md:w-1/2">
                            <x-image
                                src="canvas/tiger-canvas.webp"
                                alt="Golf Ball display in example home space"
                                additionalClass="h-96 mx-auto object-center object-cover"
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>

        <x-section.wrapper>
            <x-section.content>
                <x-slot name="title">
                    How can I frame canvas?
                </x-slot>

                <x-slot name="content">
                    <div class="!bg-secondary-200 p-10 md:p-6">
                        <p>
                            We offer multiple different ways to frame canvas's each with a select taste and style.
                        </p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <x-image
                                src="canvas/canvas-raw.webp"
                                alt="Golf Ball display in example home space"
                                additionalClass="h-full object-fit"
                                caption="Hang a standard canvas."
                            />

                            <x-image
                                src="canvas/canvas-inset.webp"
                                alt="Golf Ball display in example home space"
                                additionalClass="h-full object-fit"
                                caption="Place your canvas within an inset frame."
                            />

                            <x-image
                                src="canvas/canvas-standard.webp"
                                alt="Golf Ball display in example home space"
                                additionalClass="h-full object-fit"
                                caption="We can fit a standard frame as well."
                            />

                            <x-image
                                src="canvas/canvas-old.webp"
                                alt="Golf Ball display in example home space"
                                additionalClass="h-full object-fit"
                                caption="Or we can fit a older style frame."
                            />
                        </div>
                    </div>
                </x-slot>
            </x-section.content>
        </x-section.wrapper>
    </x-section.section>
</x-layouts.app>
