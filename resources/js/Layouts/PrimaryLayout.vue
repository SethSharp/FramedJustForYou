<script setup>
import { ref } from 'vue'
import { DisclosurePanel, Disclosure, DisclosureButton } from '@headlessui/vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import NavLink from '@/Components/Navigation/NavLink.vue'
import ResponsiveNavLink from '@/Components/Navigation/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/20/solid/index.js'
import Footer from '@/Layouts/Footer.vue'
import Column from '@/Components/Navigation/MegaMenu/Column.vue'
import ResponsiveDropdown from '@/Components/Navigation/Dropdown/ResponsiveDropdown.vue'
import MegaMenu from '@/Components/Navigation/MegaMenu.vue'
import PrimaryButton from '@/Components/Button/PrimaryButton.vue'
import ChristmasBanner from '@/Components/Christmas/ChristmasBanner.vue'
import MainBanner from '@/Components/Banners/MainBanner.vue'

defineProps({
    padding: {
        type: Boolean,
        default: true,
    },
    title: {
        type: String,
        default: '',
    },
})

let open = ref(false)
let showingNavigationDropdown = ref(false)

const links = [
    {
        name: 'Home',
        href: 'home',
        active: 'home',
    },
    {
        name: 'About',
        href: 'about',
        active: 'about',
    },
    {
        name: 'Services',
        href: '',
        active: 'services.*',
        options: [],
    },
    // {
    //     name: 'FAQ',
    //     href: 'faq',
    //     active: 'faq',
    // },
    {
        name: 'Art Studio',
        href: 'studio',
        active: 'studio',
    },
    {
        name: 'Contact',
        href: 'contact',
        active: 'contact',
    },
]

const customFraming1 = [
    {
        name: 'Acrylic',
        href: route('services.framing.acrylic'),
        active: 'services.framing.acrylic',
    },
    {
        name: 'Australian Made',
        href: route('services.framing.australian'),
        active: 'services.framing.australian',
    },
    {
        name: 'Canvas Stretching',
        href: route('services.framing.canvases'),
        active: 'services.framing.canvases',
    },
    {
        name: 'Indigenous Art',
        href: route('services.framing.indigenous-art'),
        active: 'services.framing.indigenous-art',
    },
    {
        name: 'Jigsaws',
        href: route('services.framing.jigsaws'),
        active: 'services.framing.jigsaws',
    },
    {
        name: 'Medals & Memorabilia',
        href: route('services.framing.medals-memorabilia'),
        active: 'services.framing.medals-memorabilia',
    },
]

const customFraming2 = [
    {
        name: 'Mirror',
        href: route('services.framing.mirror'),
        active: 'services.framing.mirror',
    },
    {
        name: 'Original Artwork',
        href: route('services.framing.original-artwork'),
        active: 'services.framing.original-artwork',
    },
    {
        name: 'Prints, Posters & Photos',
        href: route('services.framing.prints-posters-and-photos'),
        active: 'services.framing.prints-posters-and-photos',
    },
    {
        name: 'Handcrafted Artwork',
        href: route('services.framing.hand-crafted'),
        active: 'services.framing.hand-crafted',
    },
    {
        name: 'Restorations',
        href: route('services.framing.restorations'),
        active: 'services.framing.restorations',
    },
]

const printing = [
    {
        name: 'Photos on Canvas',
        href: route('services.printing') + '#photos-on-canvases',
        link: '#photos-on-canvases',
        active: 'services.printing',
    },
    {
        // Associated with print on demand with champton
        // Catalgoue, in store or online
        // Order on canvas, art paper, photo paper, art board
        name: 'Printing on Demand',
        href: route('services.printing') + '#printing-on-canvases',
        link: '#printing-on-canvases',
        active: 'services.printing',
    },
]

const other = [
    // Glass type (Booklet)
    {
        name: 'Glass & Glass Cutting',
        href: route('services.other.glass-cutting'),
        active: 'services.other.glass-cutting',
    },
    {
        name: 'Matboard Cutting',
        href: route('services.other.matboard-cutting'),
        active: 'services.other.matboard-cutting',
    },
    {
        name: 'Ready Made Frames',
        href: route('services.other.ready-made'),
        active: 'services.other.ready-made',
    },
    {
        name: 'Framing Supplies',
        href: route('services.other.framing-supplies'),
        active: 'services.other.framing-supplies',
    },
]
</script>

<template>
    <div class="min-h-screen">
        <MainBanner />

        <div class="bg-primary-600 pb-32">
            <Disclosure
                as="nav"
                class="border-b border-primary-300 border-opacity-25 bg-primary-600 lg:border-none"
                v-slot="{ open }"
            >
                <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
                    <div
                        class="relative flex h-16 items-center justify-between lg:border-b lg:border-primary-400 lg:border-opacity-25"
                    >
                        <div class="flex items-center px-2 lg:px-0">
                            <div class="flex-shrink-0 w-44">
                                <Link :href="route('home')">
                                    <ApplicationLogo />
                                </Link>
                            </div>
                            <div class="hidden lg:ml-10 lg:block">
                                <div class="flex space-x-4">
                                    <a
                                        v-for="item in links"
                                        :key="item.name"
                                        :href="item.href"
                                        :class="[
                                            item.current
                                                ? 'bg-primary-700 text-white'
                                                : 'text-white hover:bg-primary-500 hover:bg-opacity-75',
                                            'rounded-md py-2 px-3 text-sm font-medium',
                                        ]"
                                        :aria-current="item.current ? 'page' : undefined"
                                        >{{ item.name }}</a
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="flex lg:hidden">
                            <!-- Mobile menu button -->
                            <DisclosureButton
                                class="relative inline-flex items-center justify-center rounded-md bg-primary-600 p-2 text-primary-200 hover:bg-primary-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-600"
                            >
                                <span class="absolute -inset-0.5" />
                                <span class="sr-only">Open main menu</span>
                                <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                                <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                            </DisclosureButton>
                        </div>
                    </div>
                </div>

                <DisclosurePanel class="lg:hidden">
                    <div class="border-t border-primary-700 pb-3 pt-4">
                        <div class="mt-3 space-y-1 px-2">
                            <DisclosureButton
                                v-for="item in links"
                                :key="item.name"
                                as="a"
                                :href="item.href"
                                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-primary-500 hover:bg-opacity-75"
                            >
                                {{ item.name }}
                            </DisclosureButton>
                        </div>
                    </div>
                </DisclosurePanel>
            </Disclosure>
            <header class="py-5" :class="{ 'py-10': title }">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">
                        {{ title }}
                    </h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8 h-screen">
                <div class="rounded-lg bg-white py-6 shadow md:min-h-[500px]">
                    <slot />
                </div>
            </div>
        </main>
    </div>
</template>
