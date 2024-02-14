<x-layouts.app>
    <div class="min-h-screen">
        <div class="relative">
            <x-splide.carousel />

            <div class="absolute inset-0 bg-black/40">
                <div class="sm:w-5/6 mx-auto">
                    <div class="flex">
                        <h1 class="text-4xl md:text-6xl text-white"> Your Custom Framers </h1>
                        <p class="mt-auto text-xl md:text-3xl text-white ml-2"> on the Gold Coast </p>
                    </div>

                    <div>
                        <div class="w-full sm:flex">
                            <div class="w-full sm:w-1/2 p-12 text-lg">
                                <div class="bg-gray-200 p-4 rounded-lg">
                                    At Framed Just For You, we are more than just a framing business;
                                    we are a local institution with a passion for preserving your cherished memories
                                    in the most beautiful and meaningful way. <strong> With over three decades of experience </strong>,
                                    we have been the go-to destination for custom framing on the Gold Coast.
                                </div>
                            </div>

                            <div class="w-full sm:w-1/2"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-6 w-3/4 mx-auto" />

        <div>
            <div class="sm:w-1/2 mx-auto bg-gray-50 rounded-lg p-8">
                Our team is comprised <strong> of skilled artisans </strong> who understand the value of your keepsakes, whether it's <strong> artwork, photographs, needlework, or memorabilia </strong>.
                We take pride in our craftsmanship and attention to detail, ensuring that each piece we frame becomes a work of art in itself. <strong> As an Australian-based, family-owned and operated business </strong>,
                we are deeply rooted in our community, and our commitment to quality and customer satisfaction has remained unwavering since day one.
            </div>
        </div>

        <hr class="my-32 w-3/4 mx-auto" />

        <x-section.wrapper>
            <div class="w-3/4 mx-auto">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6 text-center">
                    <a href="{{route('new.custom-framing')}}" class="bg-white rounded-lg overflow-hidden relative hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <x-image
                            src="framing/flinders.webp"
                            alt="flinders range framed"
                            additionalClass=" object-fit"
                        />
                        <div class="absolute bg-black/30 hover:bg-black/40 transition duration-300 top-0 left-0 right-0 bottom-0 flex items-end justify-start text-white">
                            <span class="p-6 text-2xl font-medium"> Custom Framing</span>
                        </div>
                    </a>

                    <a href="{{route('new.about')}}" class="bg-white rounded-lg overflow-hidden relative hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <x-image
                            src="printing/printer.webp"
                            alt="In-store specialised printer"
                            additionalClass="object-cover"
                        />
                        <div class="absolute bg-black/30 hover:bg-black/40 transition duration-300 top-0 left-0 right-0 bottom-0 flex items-end justify-start text-white">
                            <span class="p-6 text-2xl font-medium"> Printing</span>
                        </div>
                    </a>

                    <a href="{{route('new.about')}}" class="bg-white rounded-lg overflow-hidden relative hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <x-image
                            src="matboards/matboard-cutter.webp"
                            alt="Computerised matboard cutter"
                            additionalClass="object-cover"
                        />
                        <div class="absolute bg-black/30 hover:bg-black/40 transition duration-300 top-0 left-0 right-0 bottom-0 flex items-end justify-start text-white">
                            <span class="p-6 text-2xl font-medium"> Supplies</span>
                        </div>
                    </a>
                </div>
            </div>
        </x-section.wrapper>

        <hr class="my-6 w-3/4 mx-auto" />

        <div class="bg-gray-200">
            <div class="sm:w-1/2 mx-4 sm:mx-auto">
                <div class="grid sm:grid-cols-2 text-center gap-x-6 gap-y-6 py-6">
                    <x-cards.quote user="Tracy">
                        Cannot recommend anyone more then Framed Just For You
                    </x-cards.quote>

                    <x-cards.quote user="Seth">
                        Really good work, they found the exact frame and matting that matched my graduate certificate!
                    </x-cards.quote>
                </div>
            </div>
        </div>

        <div class="bg-primary-600">
            <div class="w-1/2 mx-auto md:flex">
                <div class="w-1/2 p-12">
                    <div class="mx-auto">
                        <img class="mx-auto rounded-lg" alt="Picture of Diane standing next to our Computerised Matcutter" src="{{asset('images/people/diane.webp')}}" />
                    </div>
                </div>

                <div class="w-1/2 p-12 text-lg">
                    <div class="bg-gray-50 p-4 h-full rounded-lg">
                        Some helping text here
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
