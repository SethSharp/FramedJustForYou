<nav class="sticky top-0 z-40 bg-white border-b border-secondary-200 shadow-sm">
    <div
        x-data="{
            sidebarOpen: false
        }"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="flex items-center justify-between h-16 md:h-20"
            >
                <div class="w-48 md:w-56 shrink-0">
                    <x-app-logo/>
                </div>

                <div class="hidden lg:flex items-center gap-6 xl:gap-8">
                    <x-links.nav
                        href="{{ route('home') }}"
                        active="{{ request()->route()?->getName() === 'home' }}"
                    >
                        Home
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('about') }}"
                        active="{{ request()->route()?->getName() === 'about' }}"
                    >
                        About
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('custom-framing') }}"
                        active="{{ request()->route()?->getName() === 'custom-framing' }}"
                    >
                        Custom Framing
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('printing') }}"
                        active="{{ request()->route()?->getName() === 'printing' }}"
                    >
                        Printing
                    </x-links.nav>

                    <x-links.services-mega-menu/>

                    <a
                        href="{{ route('contact') }}"
                        class="bg-primary-500 px-4 py-2 rounded-lg text-white font-medium hover:bg-primary-600 transition-colors"
                    >
                        Contact
                    </a>
                </div>

                <div class="flex lg:hidden">
                    <button
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-secondary-600 hover:bg-secondary-100 hover:text-secondary-800 transition-colors focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                    >
                        <span class="sr-only">Open main menu</span>

                        <div x-show="!sidebarOpen" x-on:click="sidebarOpen = true" class="transition">
                            <x-icons.bars-3/>
                        </div>

                        <div x-show="sidebarOpen" x-on:click="sidebarOpen = false" class="transition">
                            <x-icons.x-mark/>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="sidebarOpen" x-transition class="lg:hidden absolute w-full z-30 bg-white border-b border-secondary-200 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="space-y-3 py-4">
                    <x-links.nav
                        href="{{ route('home') }}"
                        active="{{ request()->route()?->getName() === 'home' }}"
                    >
                        Home
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('about') }}"
                        active="{{ request()->route()?->getName() === 'about' }}"
                    >
                        About
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('custom-framing') }}"
                        active="{{ request()->route()?->getName() === 'custom-framing' }}"
                    >
                        Custom Framing
                    </x-links.nav>

                    <x-links.nav
                        href="{{ route('printing') }}"
                        active="{{ request()->route()?->getName() === 'printing' }}"
                    >
                        Printing
                    </x-links.nav>

                    <x-links.services-mega-menu/>

                    <x-links.nav
                        href="{{ route('contact') }}"
                        active="{{ request()->route()?->getName() === 'contact' }}"
                    >
                        Contact
                    </x-links.nav>
                </div>
            </div>
        </div>
    </div>
</nav>
