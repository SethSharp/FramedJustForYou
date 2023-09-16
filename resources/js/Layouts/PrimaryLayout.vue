<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import ResponsiveDropdown from "@/Components/ResponsiveDropdown.vue";
import ResponsiveDropdownLink from "@/Components/ResponsiveDropdownLink.vue";
import { Link } from '@inertiajs/vue3';
import {Bars3Icon, XMarkIcon} from "@heroicons/vue/20/solid/index.js";
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
        // Include the team here
        name: "Home",
        href: "home"
    },
    {
        name: "Services",
        href: "team"
    },
    {
        name: "Canvas",
        href: "team"
    },
    {
        name: "Framing",
        href: "team",
        options: [
            {
                name: "Custom",
                href: "home",
            },
            {
                name: "Memorabilia",
                href: "home",
            },
            {
                name: "Mirror",
                href: "home",
            },
            {
                name: "Jersey",
                href: "home",
            }
        ]
    },
    {
        name: "Get in touch",
        href: "team"
    },
    {
        name: "Portfolio",
        href: "team"
    }
]
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <!-- Primary Navigation Menu -->
                <div class="px-4 sm:px-6 lg:px-8 bg-primary-600">
                    <div class="flex h-16 h-fit py-4">
                        <div class="hidden md:flex flex h-fit w-full">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('home')">
                                    <ApplicationLogo
                                        class="block"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex justify-end w-full">
                                <div
                                    v-for="link in links"
                                    class="animation duration-300 my-auto"
                                >
                                    <div v-if="! link.options">
                                        <NavLink :href="route(link.href)">
                                            {{ link.name }}
                                        </NavLink>
                                    </div>
                                    <div v-else>
                                        <Dropdown>
                                            <template #trigger>
                                                {{ link.name }}
                                            </template>
                                            <template #content>
                                                <DropdownLink
                                                    v-for="item in link.options"
                                                    :href="route(item.href)">
                                                    {{ item.name }}
                                                </DropdownLink>
                                            </template>
                                        </Dropdown>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center md:hidden">
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

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="md:hidden"
                >
                    <div class="pt-2 pb-3 space-y-1">
                        <div v-for="link in links">
                            <div v-if="! link.options">
                                <ResponsiveNavLink
                                    :href="route(link.href)"
                                    :active="route().current(link.href)"
                                >
                                    {{ link.name }}
                                </ResponsiveNavLink>
                            </div>
                            <div v-else>
                                <ResponsiveDropdown>
                                    <template #trigger>
                                        <ResponsiveNavLink :active="route().current(link.href)">
                                            {{ link.name }}
                                        </ResponsiveNavLink>
                                    </template>
                                    <template #content>
                                        <ResponsiveNavLink
                                            v-for="item in link.options"
                                            :href="route(item.href)">
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
                <div class="mx-10 mt-10 bg-gray-200 min-h-screen">
                    <slot />
                </div>
            </main>

            <footer class="bg-primary-500 shadow text-gray-200">
                <div class="text-center">
                    <div class="mt-4">
                        © 2023 FramedJust4You. All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>
