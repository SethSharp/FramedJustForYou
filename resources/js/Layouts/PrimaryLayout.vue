<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/Navigation/NavLink.vue';
import ResponsiveNavLink from "@/Components/Navigation/ResponsiveNavLink.vue";
import { Link } from '@inertiajs/vue3';
import {Bars3Icon, XMarkIcon} from "@heroicons/vue/20/solid/index.js";
import Footer from "@/Layouts/Footer.vue";
import Column from "@/Components/Navigation/MegaMenu/Column.vue";
import ResponsiveDropdown from "@/Components/Navigation/Dropdown/ResponsiveDropdown.vue";
import MegaMenu from "@/Components/Navigation/MegaMenu.vue";
let showingNavigationDropdown = ref(false);

const links = [
    {
        name: "Home",
        href: "home",
        active: "home",
    },
    {
        name: "About",
        href: "about",
        active: "about",
    },
    {
        name: "Services",
        href: "",
        active: "services.*",
        options: [
            {
                name: "Framing",
                href: "services.framing",
                active: "services.framing.*",
            },
            {
                name: "Printing & Canvas",
                href: "services.printing",
                active: "services.printing",
            },
        ]
    },
    {
        name: "Art Studio",
        href: "studio",
        active: "studio",
    },
    // {
    //     name: "Gallery",
    //     href: "gallery",
    //     active: "gallery",
    // },
    {
        name: "Contact",
        href: "find",
        active: "find"
    }
]


const customFraming = [
    {
        name: 'Memorabilia',
        href: route('services.framing.memorabilia'),
        active: 'services.framing.memorabilia'
    },
    {
        name: 'Jigsaw',
        href: route('services.framing.jigsaw'),
        active: 'services.framing.jigsaw'
    },
    {
        name: 'Mirror',
        href: route('services.framing.mirror'),
        active: 'services.framing.mirror'
    },
    {
        name: 'Embroidery',
        href: route('services.framing.embroidery'),
        active: 'services.framing.embroidery'
    },
]

const printing = [
    {
        name: 'Photos on Canvas',
        href: route('services.printing') + '#photos-on-canvases',
        link: '#photos-on-canvases',
        active: 'services.printing'
    },
    {
        name: 'Printing on Canvas',
        href: route('services.printing') + '#printing-on-canvases',
        link: '#printing-on-canvases',
        active: 'services.printing'
    },
    {
        name: 'Stretched Canvases',
        href: route('services.printing') + '#stretched-canvases',
        link: '#stretched-canvases',
        active: 'services.printing'
    },
]

const restorations = [
    {
        name: "Glass Cutting",
        href: route('services.restorations.glass-cutting'),
        active: 'services.restorations.glass-cutting'
    },
    {
        name: "Matboard Cutting",
        href: route('services.restorations.matboard-cutting'),
        active: 'services.restorations.matboard-cutting'
    },
    {
        name: "Full revamps",
        href: route('services.restorations.revamps'),
        active: 'services.restorations.revamps'
    }
]

const accessories = [

]
</script>

<template>
    <div>
        <div class="bg-primary-600 text-white text-center justify-center py-1">
            Welcome to our new site! Check out our google reviews
            <a class="font-bold"
               href="https://www.google.com/search?client=opera&q=framed+just+for+you&sourceid=opera&ie=UTF-8&oe=UTF-8#lrd=0x6b91104badf99849:0x5081ce9cf421fff2,1,,,,"
            >
                here
            </a>
        </div>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <!-- Primary Navigation Menu -->
                <div class="md:px-4 lg:px-8 bg-primary-700">
                    <div class="flex h-16 h-fit py-4">
                        <div class="hidden lg:flex flex h-fit w-full">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-4 lg:space-x-8 sm:-my-px sm:ml-10 sm:flex justify-end w-full">
                                <div
                                    v-for="link in links"
                                    class="animation duration-300 my-auto"
                                >
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
                                                <NavLink
                                                    :active="route().current(link.active)"
                                                >
                                                    {{ link.name }}
                                                </NavLink>
                                            </template>
                                            <template #columns>
                                                <Column
                                                    title="Custom Framing"
                                                    :href="route('services.framing')"
                                                    :links="customFraming"
                                                />

                                                <Column
                                                    title="Printing"
                                                    :href="route('services.printing')"
                                                    :links="printing"
                                                />

                                                <Column
                                                    title="Restorations"
                                                    :links="restorations"
                                                />

                                                <Column
                                                    title="Accessories"
                                                    :links="accessories"
                                                />
                                            </template>
                                        </MegaMenu>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 w-full flex justify-end lg:hidden">
                            <div class="w-1/2">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block"
                                    />
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
                                                :links="customFraming"
                                            />

                                            <Column
                                                title="Printing"
                                                :href="route('services.printing')"
                                                :links="printing"
                                            />

                                            <Column
                                                title="Restorations"
                                                :links="restorations"
                                            />

                                            <Column
                                                title="Accessories"
                                                :links="accessories"
                                            />
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
                <div class="mx-4 mt-10 min-h-screen">
                    <slot />
                </div>
            </main>

            <Footer />
        </div>
    </div>
</template>
