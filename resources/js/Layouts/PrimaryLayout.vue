<script setup>
import { ref } from 'vue'
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

defineProps({
    padding: {
        type: Boolean,
        default: true,
    },
})

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
        options: [
            {
                name: 'Framing',
                href: 'services.framing',
                active: 'services.framing.*',
            },
            {
                name: 'Printing & Canvas',
                href: 'services.printing',
                active: 'services.printing',
            },
        ],
    },
    {
        name: 'FAQ',
        href: 'faq',
        active: 'faq',
    },
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
        name: 'Australian Framing Kits',
        href: route('services.framing.australian'),
        active: 'services.framing.australian',
    },
    {
        name: 'Canvases',
        href: route('services.framing.canvases'),
        active: 'services.framing.canvases',
    },
    {
        name: 'Hanging Systems',
        href: route('services.framing.hanging-systems'),
        active: 'services.framing.hanging-systems',
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
]

const customFraming2 = [
    {
        name: 'Medals & Memorabilia',
        href: route('services.framing.medals-memorabilia'),
        active: 'services.framing.medals-memorabilia',
    },
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
        name: 'Tapestries and Needlework',
        href: route('services.framing.tapestries-and-needlework'),
        active: 'services.framing.tapestries-and-needlework',
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
    {
        name: "Giclee's",
        href: route('services.printing') + '#giclee',
        link: '#giclee',
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
    <div>
        <div class="bg-primary-500 text-white text-center justify-center py-1">
            Welcome to our new site! Check out our google reviews
            <a
                class="font-bold"
                href="https://www.google.com/search?client=opera&q=framed+just+for+you&sourceid=opera&ie=UTF-8&oe=UTF-8#lrd=0x6b91104badf99849:0x5081ce9cf421fff2,1,,,,"
            >
                here
            </a>
        </div>
        <div class="min-h-screen bg-gray-100">
            <!-- Primary Navigation Menu -->
            <nav>
                <div class="md:px-4 lg:px-8 bg-primary-600">
                    <div class="flex h-16 h-fit py-4">
                        <div class="hidden lg:flex flex h-fit w-full">
                            <!-- Logo -->
                            <div class="shrink-0 items-center w-1/5">
                                <Link :href="route('home')">
                                    <ApplicationLogo/>
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="hidden space-x-4 lg:space-x-8 sm:-my-px sm:ml-10 sm:flex justify-end w-full"
                            >
                                <div v-for="link in links" class="animation duration-300 my-auto">
                                    <div v-if="!link.options">
                                        <NavLink
                                            :href="route(link.href)"
                                            :active="route().current(link.active)"
                                        >
                                            {{ link.name }}
                                        </NavLink>
                                    </div>
                                    <div v-else>
                                        <MegaMenu>
                                            <template #trigger>
                                                <NavLink :active="route().current(link.active)">
                                                    {{ link.name }}
                                                </NavLink>
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
                                <PrimaryButton as="button" :href="route('locator')" class="my-auto">
                                    Store Locator
                                </PrimaryButton>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 w-full flex justify-end lg:hidden">
                            <div class="w-1/2">
                                <Link :href="route('home')">
                                    <ApplicationLogo class="block" />
                                </Link>
                            </div>
                            <div class="w-1/2 my-auto flex justify-end">
                                <Bars3Icon
                                    v-if="!showingNavigationDropdown"
                                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                                    class="w-12 h-12 text-white cursor-pointer transition duration-400 ease-in-out"
                                />
                                <XMarkIcon
                                    v-if="showingNavigationDropdown"
                                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                                    class="w-12 h-12 text-white cursor-pointer transition duration-400 ease-in-out"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="lg:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <div v-for="link in links">
                            <div v-if="!link.options" class="border-b-2">
                                <ResponsiveNavLink
                                    :href="route(link.href)"
                                    :active="route().current(link.active)"
                                >
                                    {{ link.name }}
                                </ResponsiveNavLink>
                            </div>
                            <div v-else>
                                <ResponsiveDropdown>
                                    <template #trigger>
                                        <ResponsiveNavLink :active="route().current(link.active)">
                                            {{ link.name }}
                                        </ResponsiveNavLink>
                                    </template>
                                    <template #content>
                                        <div class="grid grid-cols-2 sm:grid-cols-3">
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
                                        </div>
                                    </template>
                                </ResponsiveDropdown>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <div class="relative top-0">
                    <slot name="carousel" />
                </div>
                <div class="min-h-screen mx-4 mt-10">
                    <slot />
                </div>
            </main>

            <Footer />
        </div>
    </div>
</template>
