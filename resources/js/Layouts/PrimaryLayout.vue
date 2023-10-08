<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import NavLink from '@/Components/Navigation/NavLink.vue';
import ResponsiveNavLink from "@/Components/Navigation/ResponsiveNavLink.vue";
import { Link } from '@inertiajs/vue3';
import {Bars3Icon, XMarkIcon} from "@heroicons/vue/20/solid/index.js";
import Footer from "@/Layouts/Footer.vue";
import DropdownLink from "@/Components/Navigation/Dropdown/DropdownLink.vue";
import ResponsiveDropdown from "@/Components/Navigation/Dropdown/ResponsiveDropdown.vue";
import Dropdown from "@/Components/Navigation/Dropdown/Dropdown.vue";
let showingNavigationDropdown = ref(false);


/* FRAMING
* Custom
* Memorabilia
* Mirror
* Jersey
* */


/* Other Services (In links)
(Not going to be a drop-down but going to go to a
grid of services with a dedicated page for each, maybe some grouping)
* Floating frames
* Canvas
* Custom Printing
* Fabric Framing
* Blank Canvases
* Fine art
* Needle works (other options)
* */

/* Canvas, also on links
* Canvases
* Stretching
* Photos on Canvas
* */

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
        href: "about",
        active: "about",
        options: [
            {
                name: "Framing",
                href: "framing",
                active: "framing",
            },
            {
                name: "Memorabilia",
                href: "memorabilia",
                active: "memorabilia",
            },
            {
                name: "Printing",
                href: "printing",
                active: "printing",
            },
        ]
    },
    {
        name: "Other",
        href: "about",
        active: "about",
        options: [
            {
                name: "ArtStudio",
                href: "services",
                active: "services",
            },
        ]
    },
    {
        name: "Gallery",
        href: "gallery",
        active: "gallery",
    },
    {
        name: "Store",
        href: "store",
        active: "store",
    },
    {
        name: "Contact",
        href: "find",
        active: "find"
    }
]
</script>

<template>
    <div>
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
                                        <Dropdown>
                                            <template #trigger>
                                                <NavLink>
                                                    {{ link.name }}
                                                </NavLink>
                                            </template>
                                            <template #content>
                                                <DropdownLink
                                                    v-for="item in link.options"
                                                    :href="route(item.href)"
                                                    :active="route().current(item.active)"
                                                >
                                                    {{ item.name }}
                                                </DropdownLink>
                                            </template>
                                        </Dropdown>
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
                                        <ResponsiveNavLink
                                            v-for="item in link.options"
                                            :href="route(item.href)"
                                            :active="route().current(item.active)"
                                        >
                                            {{ item.name }}
                                        </ResponsiveNavLink>
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
