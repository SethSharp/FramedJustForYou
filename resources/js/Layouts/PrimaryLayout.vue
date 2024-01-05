<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/20/solid/index.js'
import { DisclosurePanel, Disclosure, DisclosureButton } from '@headlessui/vue'
import Footer from '@/Layouts/Footer.vue'
import NavLink from '@/Components/Navigation/NavLink.vue'
import MegaMenu from '@/Components/Navigation/MegaMenu.vue'
import MainBanner from '@/Components/Banners/MainBanner.vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import Column from '@/Components/Navigation/MegaMenu/Column.vue'
import ResponsiveDropdown from '@/Components/Navigation/Dropdown/ResponsiveDropdown.vue'
import MainPageCarousel from '@/Components/MainPageCarousel.vue'

defineProps({
    padding: {
        type: Boolean,
        default: true,
    },
    image: {
        type: String,
        default: '',
    },
    carousel: {
        type: Boolean,
        default: false,
    },
})

let open = ref(false)

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
        megaMenu: true,
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
        name: 'Printing on Demand',
        href: route('services.printing') + '#printing-on-canvases',
        link: '#printing-on-canvases',
        active: 'services.printing',
    },
]

const other = [
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

        <div>
            <Disclosure
                as="nav"
                class="border-b border-primary-300 border-opacity-25 bg-primary-600 lg:border-none"
                v-slot="{ open }"
            >
                <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
                    <div
                        class="relative flex h-24 w-full items-center justify-between lg:border-b lg:border-primary-400 lg:border-opacity-25"
                    >
                        <div class="grid grid-cols-2 w-full">
                            <div class="flex-shrink-0 w-48">
                                <Link :href="route('home')" class="w-44">
                                    <ApplicationLogo />
                                </Link>
                            </div>

                            <div class="hidden lg:block my-auto">
                                <div class="flex space-x-6 justify-end">
                                    <div v-for="link in links" :key="link.name">
                                        <NavLink
                                            v-if="!link.megaMenu"
                                            :key="link.name"
                                            :href="route(link.href)"
                                            :active="route().current(link.href)"
                                        >
                                            {{ link.name }}
                                        </NavLink>

                                        <MegaMenu v-else>
                                            <template #trigger>
                                                {{ link.name }}
                                            </template>

                                            <template #columns>
                                                <Column
                                                    title="Custom Framing"
                                                    :href="route('services.framing')"
                                                    :links="customFraming1"
                                                />

                                                <Column
                                                    title=""
                                                    :href="route('services.framing')"
                                                    :links="customFraming2"
                                                />

                                                <Column
                                                    title="Printing"
                                                    :href="route('services.printing')"
                                                    :links="printing"
                                                />

                                                <Column title="Other" :links="other" />
                                            </template>
                                        </MegaMenu>
                                    </div>
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
                            <div v-for="link in links" :key="link.name">
                                <NavLink
                                    v-if="!link.megaMenu"
                                    :key="link.name"
                                    :href="route(link.href)"
                                >
                                    {{ link.name }}
                                </NavLink>

                                <div v-else>
                                    <ResponsiveDropdown>
                                        <template #trigger>
                                            {{ link.name }}
                                        </template>
                                        <template #content>
                                            <div class="grid grid-cols-2 sm:grid-cols-3 mt-4">
                                                <Column
                                                    title="Custom Framing"
                                                    :href="route('services.framing')"
                                                    :links="customFraming1"
                                                />

                                                <Column title="" :links="customFraming2" />

                                                <Column
                                                    title="Printing"
                                                    :href="route('services.printing')"
                                                    :links="printing"
                                                />

                                                <Column title="Other" :links="other" />
                                            </div>
                                        </template>
                                    </ResponsiveDropdown>
                                </div>
                            </div>
                        </div>
                    </div>
                </DisclosurePanel>
            </Disclosure>

            <div class="z-20">
                <div class="absolute w-full">
                    <div v-if="image" class="h-[275px] relative z-10">
                        <div class="absolute inset-0 bg-black/40"></div>

                        <img
                            :src="'https://d2bq6z9lholfa6.cloudfront.net/images/' + image"
                            class="object-cover w-full h-400px]"
                        />
                    </div>

                    <div v-if="carousel" class="relative z-20">
                        <!--                        <div class="absolute inset-0 bg-black/40"></div>-->

                        <MainPageCarousel />
                    </div>
                </div>

                <main class="relative z-30">
                    <div
                        class="max-w-7xl pt-32 px-4 pb-12 sm:px-6 lg:px-8 relative z-30"
                        :class="{ '!pt-12': !image && !carousel }"
                    >
                        <div class="rounded-lg bg-white py-6 shadow">
                            <slot />
                        </div>
                    </div>

                    <Footer />
                </main>
            </div>
        </div>
    </div>
</template>
