<x-layouts.app>
    <div class="min-h-screen">
        <div class="flex">
            <h1 class="text-6xl text-gray-700"> Your Custom Framers </h1>
            <p class="mt-auto text-3xl text-gray-500 ml-2"> on the Gold Coast </p>
        </div>

        <div class="bg-white">
            <div class="w-full">
                <div class="w-1/2 p-12 text-lg">
                    <div class="bg-gray-200 p-4 rounded-lg">
                        At Framed Just For You, we are more than just a framing business; we are a local institution with a passion for preserving your cherished memories in the most beautiful and meaningful way. With over three decades of experience, we have been the go-to destination for custom framing on the Gold Coast.
                    </div>
                </div>

                <div class="w-1/2"> </div>
            </div>
        </div>

        <div class="bg-primary-600">
            <div class="w-3/4 mx-auto">
                <div class="flex justify-between text-center gap-x-6 py-6">
                    <div class="bg-white rounded-lg w-44 h-44">
                        Custom Framing
                    </div>

                    <div class="bg-white rounded-lg w-44 h-44">
                        Printing
                    </div>

                    <div class="bg-white rounded-lg w-44 h-44">
                        Assets
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray-200">
            <div class="w-1/2 mx-auto">
                <div class="grid grid-cols-2 h-52 text-center gap-x-6 py-6">
                    <x-cards.quote user="Tracy">
                        Cannot recommend anyone more then Framed Just For You
                    </x-cards.quote>

                    <x-cards.quote user="Seth">
                        Really well done work, can find the exact frame and matting that matched by graduate certificate!
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
