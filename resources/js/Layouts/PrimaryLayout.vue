<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Navigation/Dropdown/Dropdown.vue';
import DropdownLink from '@/Components/Navigation/Dropdown/DropdownLink.vue';
import NavLink from '@/Components/Navigation/NavLink.vue';
import ResponsiveNavLink from "@/Components/Navigation/ResponsiveNavLink.vue";
import ResponsiveDropdown from "@/Components/Navigation/Dropdown/ResponsiveDropdown.vue";
import * as SocialIcons from "@/Components/Icons/Social";
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
        name: "Printing",
        href: "canvas",
        active: "canvas",
    },
    {
        name: "Framing",
        href: "framing",
        active: "framing.*",
        options: [
            {
                name: "Custom",
                href: "framing.custom",
                active: "framing.custom",
            },
            {
                name: "Mirror",
                href: "framing.mirror",
                active: "framing.mirror",
            },
            {
                name: "Jersey",
                href: "framing.jersey",
                active: "framing.jersey",
            },
            {
                name: "Memorabilia",
                href: "framing.memorabilia",
                active: "framing.memorabilia",
            },
        ]
    },
    {
        name: "Other Services",
        href: "services",
        active: "services",
    },
    {
        name: "Portfolio",
        href: "portfolio",
        active: "portfolio",
    },
    {
        name: "Find us",
        href: "find",
        active: "find"
    }
]

const socialLinks = [
    {
        name: "Instagram",
        link: "https://www.instagram.com/framedjust4u/",
        icon: "Instagram"
    },
    {
        name: "Facebook",
        link: "https://www.facebook.com/framedjustforyou/",
        icon: "Facebook"
    },
    {
        name: "Shopify",
        link: "https://www.facebook.com/framedjustforyou/",
        icon: "Shopify"
    }
]
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav>
                <!-- Primary Navigation Menu -->
                <div class="px-4 md:px-4 lg:px-8 bg-primary-700">
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
                            <div class="hidden space-x-4 lg:space-x-8 sm:-my-px sm:ml-10 sm:flex justify-end w-full">
                                <div
                                    v-for="link in links"
                                    class="animation duration-300 my-auto"
                                >
                                    <div v-if="! link.options">
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
                                                <NavLink :active="route().current(link.active)">
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
                <div class="mx-10 mt-10 min-h-screen">
                    <slot />
                </div>
            </main>

            <footer class="bg-primary-500">
                <div class="inline-flex w-full justify-center py-5">
                    <div class="flex ml-10">
                        <div v-for="social in socialLinks">
                            <a :href="social.link">
                                <component
                                    :is="SocialIcons[social.icon]"
                                />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="py-4 text-center text-white font-medium text-lg">
                    © 2023 FramedJust4You. All rights reserved.
                </div>
            </footer>
        </div>
    </div>
</template>
