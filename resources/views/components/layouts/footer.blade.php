<footer class="bg-primary-700">
    <div class="lg:flex w-full">
        <div class="w-full lg:w-1/5 lg:my-auto mx-6">
            <div class="pt-8 lg:pt-0">
                <a href="{{route('new.home')}}">
                    <x-app-logo class="w-1/2 lg:w-full"/>
                </a>
            </div>

            <div class="mt-4">
                <p class="text-md leading-6 text-gray-300">
                    Framing all your needs on the Gold Coast since 1997
                </p>

                <div class="flex space-x-6 mt-4">
                    <a
                        href="https://www.facebook.com/framedjustforyou/"
                        aria-label="Framed Just For You Facebook"
                        class="text-white cursor-pointer"
                    >
                        <span class="sr-only"> Facebook </span>
                        <x-icons.socials.facebook/>
                    </a>

                    <a
                        href="https://www.instagram.com/framedjust4u/"
                        aria-label="Framed Just For You Instagram"
                        class="text-white cursor-pointer"
                    >
                        <span class="sr-only"> Instagram </span>
                        <x-icons.socials.instagram/>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-4/5 text-sm">
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-4 gap-y-6 mx-4 py-12">
                <div>
                    <h1 class="text-md font-semibold leading-6 text-white">Pages</h1>

                    <ul role="list" class="mt-6 space-y-4">
                        Links
                    </ul>
                </div>

                <div>
                    <h1 class="text-md font-semibold leading-6 text-white">Services</h1>

                    <ul role="list" class="mt-6 space-y-4">
                        Links
                    </ul>
                </div>
                <div>
                    <ul role="list" class="mt-12 space-y-4">
                        Links
                    </ul>
                </div>
                <div>
                    <h1 class="text-md font-semibold leading-6 text-white">Printing</h1>

                    <ul role="list" class="mt-6 space-y-4">
                        Links
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-white flex p-12 justify-between">
        <div class="text-xs text-gray-200">
            <p>&copy; 2023 Framed Just For You. All rights reserved.</p>
        </div>

        <div class="text-xs text-gray-200">
            <a href="{{route('sitemap')}}">sitemap</a>
        </div>
    </div>
</footer>
